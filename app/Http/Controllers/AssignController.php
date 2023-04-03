<?php

namespace App\Http\Controllers;

use App\Helper\MailHelper;
use App\Models\AssignModule;
use App\Models\BatchTest;
use App\Models\Student;
use App\Models\StudentTest;
use App\Models\Teacher;
use App\Models\TeacherTest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
 

class AssignController extends Controller
{

    public function assignTestToBatch(Request $re)
    {
        // print_r($re->batchIds);die();
        // return response()->json($re);
        $tId = session('tId');
        // return response()->json(['success' => true, 'message' => $re->batchIds ], 200);

        if ($re->batchIds != null) {
            foreach ($re->batchIds as $id) {

                $batchTests = BatchTest::where('batch_id', $id)->where('test_id', $tId)->get();

                if (!$batchTests->count()) {
                    $bTest = new BatchTest();
                    $bTest->batch_id = $id;
                    $bTest->test_id = $tId;
                    $bTest->save();
                }

                $stu = Student::where('batch_id', $id)->get();
              
                $stu_array_datas = json_decode($stu);
                foreach ($stu_array_datas as $stu_array_data) {
                    $test_pass = rand(10000, 100000);
                    $stuTest = new StudentTest();
                    $stuTest->student_id = $stu_array_data->id;
                    $stuTest->test_id = $tId;
                    $stuTest->password_login = $test_pass;
                    $stuTest->save();

                    $data['stu_name'] = $stu_array_data->name;
                    $data['stu_email'] = $stu_array_data->email;
                    $data['test_id'] = $tId;
                    $data['test_password'] = $test_pass;


                    MailHelper::mailStudentPassword($data);
                }
            }
            return response()->json(['success' => true, 'message' => 'Test Assigned to batch successfully'], 200);
        } else {
            return response()->json(['success' => false, 'message' => 'No Data Recieved'], 419);
        }
    }

    public function assignTestToTeacher(Request $re)
    {
        // print_r(Auth::user()->teacher_id);die();
        // print_r($re->teachIds);die();
        $tId = session('tId');
        if ($re->teachIds != null  && $re->batch_ids != "NULL") {

            foreach ($re->teachIds as $id) {
                $batchTests = TeacherTest::where('teacher_id', $id)->where('test_id', $tId)->where('assign_modules_id', 'false')->where('batch_id', $re->batch_ids)->get();

                if (!$batchTests->count()) {
                    $bTest = new TeacherTest();
                    $bTest->teacher_id = $id;
                    $bTest->test_id = $tId;
                    $bTest->batch_id = $re->batch_ids;
                    $bTest->assigner_teach_id = Auth::user()->teacher_id;
                    $bTest->save();
                }
            }
            return response()->json(['success' => true, 'message' => 'Test Assigned to teacher successfully'], 200);
        } else {
            return response()->json(['error' => true, 'message' => 'No Data Recieved'], 200);
            // return response()->json(['error' => true, 'message' => 'No Data Recieved'], 419);
        }
    }

    public function getStudentsOfTestId($testId, $shortQueId)
    {
        $data_get_tests = DB::table('assign_modules')
            ->select('assign_modules.assigner_id', 'assign_modules.teacher_id', 'assign_modules.shortQue_id', 'assign_modules.student_ids')
            ->where('assign_modules.assigner_id', '=', Auth::user()->student_id)
            ->where('assign_modules.shortQue_id', '=', $shortQueId)
            ->where('assign_modules.test_id', '=', $testId)
            ->get()->toArray();
        return $data_get_tests;
    }

    public function get_studentFromTestId(Request $r)
    {
        $tId = session('tId');
        $students = null;
        try {
            $students = DB::table('students')
                ->select('students.name', 'students.id')
                ->join('batch_tests', 'students.batch_id', '=', 'batch_tests.batch_id')
                ->where('batch_tests.test_id', '=', $tId)
                ->where('students.name', 'like', '%' .  $r->term['term'] . '%')
                ->get();
        } catch (Exception $e) {

            if ($r->page_name == "short_answer_copy") {
                $tId = session('tId');


                $studentsAlreadyAssigned = $this->getStudentsOfTestId($tId, $r->sQueId);


                // print_r($studentsAlreadyAssigned);die(); 


                if (!empty($studentsAlreadyAssigned)) {

                    $module_array_stu = [];

                    foreach ($studentsAlreadyAssigned as $obj) {

                        $alreadyAssignedStudentsIds = json_decode($obj->student_ids);

                        foreach ($alreadyAssignedStudentsIds as $module_array_stu_data) {
                            $module_array_stu[] = $module_array_stu_data;
                        }


                        // print_r($module_array_stu);die();



                        // $students_data_obj = DB::table('students')
                        //  ->select('students.name', 'students.id')
                        //  ->join('batch_tests', 'students.batch_id', '=', 'batch_tests.batch_id')
                        //  ->where('batch_tests.test_id', '=', $tId)
                        //  ->get();  


                        $students_data_obj = DB::table('students')
                            ->select('students.name', 'students.id')
                            ->join('student_tests', 'students.id', '=', 'student_tests.student_id')
                            ->where('student_tests.test_id', '=', $tId)
                            ->get();

                        //  print_r($students_data_obj);die();



                        $students_array = json_decode($students_data_obj);
                        $stusent_table_data_array = [];

                        foreach ($students_array as $student_obj) {
                            $stusent_table_data = $student_obj->id;
                            $stusent_table_data_array[] = $stusent_table_data;
                        }
                        // print_r($stusent_table_data_array);  die();
                        $students_diff_array = array_diff($stusent_table_data_array, $module_array_stu);
                        $students = DB::table('students')
                            ->select('students.name', 'students.id')
                            ->whereIn('students.id',   $students_diff_array)
                            ->get();

                        //    print_r($students);
                    }
                } else {
                    $tId = session('tId');
                    $students = DB::table('students')
                        ->select('students.name', 'students.id')
                        ->join('student_tests', 'students.id', '=', 'student_tests.student_id')
                        ->where('student_tests.test_id', '=', $tId)
                        ->get();
                    // print_r($students);die();
                }
            } elseif ($r->page_name == "osplist_copy") {
                $tId = session('tId');

                $data_get_tests = DB::table('assign_modules')
                    ->select('assign_modules.assigner_id', 'assign_modules.teacher_id', 'assign_modules.ospque_id', 'assign_modules.student_ids')
                    ->where('assign_modules.assigner_id', '=', Auth::user()->student_id)
                    ->where('assign_modules.ospque_id', '=', $r->oQueId)
                    ->where('assign_modules.test_id', '=', $tId)
                    ->get()->toArray();

                if (!empty($data_get_tests)) {
                    $module_array_stu = [];
                    foreach ($data_get_tests as $obj) {
                        $module_array_stu_datas = json_decode($obj->student_ids);
                        foreach ($module_array_stu_datas as $module_array_stu_data) {
                            array_push($module_array_stu, $module_array_stu_data);
                        }

                        //  print_r($module_array_stu); die();


                        $students_data_obj = DB::table('students')
                            ->select('students.name', 'students.id')
                            ->join('student_tests', 'students.id', '=', 'student_tests.student_id')
                            ->where('student_tests.test_id', '=', $tId)
                            ->get();



                        $students_array = json_decode($students_data_obj);
                        $stusent_table_data_array = [];
                        foreach ($students_array as $student_obj) {
                            $stusent_table_data = $student_obj->id;
                            $stusent_table_data_array[] = $stusent_table_data;
                        }



                        $students_diff_array = array_diff($stusent_table_data_array, $module_array_stu);



                        $students = DB::table('students')
                            ->select('students.name', 'students.id')
                            ->join('student_tests', 'students.id', '=', 'student_tests.student_id')
                            ->where('student_tests.test_id', '=', $tId)
                            ->whereIn('students.id',   $students_diff_array)
                            ->get();
                    }
                } else {
                    $students = DB::table('students')
                        ->select('students.name', 'students.id')
                        ->join('student_tests', 'students.id', '=', 'student_tests.student_id')
                        ->where('student_tests.test_id', '=', $tId)
                        ->get();
                }
            } else {
                $students = DB::table('students')
                    ->select('students.name', 'students.id')
                    ->join('student_tests', 'students.id', '=', 'student_tests.student_id')
                    ->where('student_tests.test_id', '=', $tId)
                    ->get();
            }
        }



        return response()->json($students);
    }

    public function get_studentDetailsOfSelectedIds(Request $r)
    {

        $student_ids = $r->student_ids;
        $students = Student::whereIn('id', $student_ids)->get();
        return response()->json($students);
    }

    public function get_batchIdFromBatchTest()
    {
        $tId = session('tId');
        $bT = BatchTest::where('test_id', $tId)->get();

        return $bT;
    }

    public function get_teacherOfId(Request $r)
    {
        // return response()->json($r->tId);
        $teacher = Teacher::find($r->tId);
        return response()->json($teacher);
    }

    public function assignModule(Request $r)
    {
        // return response()->json($r->all());

        if ($r->student_ids == null || $r->teacher_id == null) {
            return response()->json(['success' => false, 'message' => 'please select students and teacher'], 419);
        }


        $assignModule =   new AssignModule;
        $assignModule->assigner_id = (int) $r->assigner_id;
        $assignModule->teacher_id = (int) $r->teacher_id;
        $assignModule->test_id = (int) $r->test_id;
        $assignModule->ospque_id = (int) $r->ospque_id;
        $assignModule->shortQue_id = (int) $r->shortQue_id;
        $assignModule->viva_id = (int) $r->viva_id;
        $assignModule->student_ids = json_encode($r->student_ids);
        $assignModule->save();

        $bTest = new TeacherTest();
        $bTest->teacher_id = (int) $r->teacher_id;
        $bTest->test_id = (int) $r->test_id;
        $bTest->assign_modules_id = (int) $assignModule->id;
        $bTest->save();

        if ($bTest->save()) {
            return response()->json(['success' => true, 'message' => 'Test Assigned to Module successfully'], 200);
        } else {
            return response()->json(['success' => false, 'message' => 'Some thing went wrong'], 419);
        }
    }
}
