<?php

namespace App\Http\Controllers;

use App\Helper\TestHelper;
use App\Models\Batch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use App\Models\Branch;
use Illuminate\Support\Facades\Auth;
use App\Models\McqTest;
use App\Models\McqTestQuestion;
use Illuminate\Support\Facades\DB;
use App\Models\Subject;
use App\Models\ShortQuestionTest;
use App\Models\ShortQueTest;
use Illuminate\Support\Facades\Validator;
use App\Models\OspTest;
use App\Models\OspQuestionTest;
use App\Models\Student;
use App\Models\OspTestQuesAnswer;
use App\Models\Teacher;
use App\Models\Test;
use App\Models\Viva;
use App\Models\VivaDetail;
use App\Models\BulkImg_mcq;
use App\Models\BulkImg_short;
use App\Models\BatchTest;
use App\Models\StudentTest;
use Mockery\Undefined;
use Illuminate\Support\Facades\Storage;
use Session;



use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx as ReaderXlsx;


class FrontController extends Controller
{
    use AuthenticatesUsers;

    public function index()
    {
        return view('front-end.index');
    }
    public function FormLogin()
    {
        try {
            return view('front-end.login');
        } catch (\Exception $e) {
            $bug = $e->getMessage();
            dd($bug);
            return redirect()->back()->with('error', $bug);
        }
    }
    public function postLogin(Request $request)
    {

        $validData = $request->validate([
            'email' => 'required|email|string',
            'password' => 'required|string'
        ]);


        try {
            if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
                $user = auth()->user();

                if ($user->user_type == 'Student') {
                    return redirect('StudentLogin')->with('success', 'Student Login Successfully !');
                }
                if ($user->user_type == 'Teacher') {
                    return redirect('TeacherLogin')->with('success', 'Student Login Successfully !');
                }
            } else {
                return back()->with('error', 'Whoops! invalid email and password.');
            }
        } catch (\Exception $e) {
            $bug = $e->getMessage();
            dd($bug);
            return redirect()->back()->with('error', $bug);
        }

        //   try{

        //     $emailExists = User::where('email',$request->email)->count();
        //     if($emailExists){
        //         $student = User::where('email',$request->email)->where('user_type','Student')->first();
        //         $teacher = User::where('email',$request->email)->where('user_type','Teacher')->first();
        //         if($student){
        //             return redirect('StudentLogin')->with('success', 'Student Login Successfully !');
        //         }elseif($teacher){
        //             return redirect('TeacherLogin')->with('success', 'Student Login Successfully !');
        //         }

        //     }else{
        //          return redirect('front')->with('error', 'Invalid Credentials ! Try again.');
        //     }
        //     }catch (\Exception $e) {
        //         $bug = $e->getMessage();
        //         dd($bug);
        //         return redirect()->back()->with('error', $bug);

        //     }
    }

    public function Teacher_Welcome()
    {
        return view('front-end.index-teacher-login');
    }

    public function Teacher_view_test()
    {
        $tests = TestHelper::testBriefDetails();

        return view('front-end.View_test', ['tests' => $tests]);
    }

    public function assign_test()
    {
        $tests = TestHelper::testBriefDetails();

        return view('front-end.assign', ['tests' => $tests]);
    }
    
    public function assign_test_check_box(Request $request)
    {
        // dd($batches = Batch::all());
     
       if($request->group1 == "assign_studnet"){
        
        $tId = $request->test_id;
        session(['tId' => $tId]);
       
        $batches = Batch::all();
        
        return view('front-end.aasign-student', ['batches' => $batches]);
       
       }else{
        $tId = $request->test_id;
        session(['tId' => $tId]);
      
        // $teachers = Teacher::get();
        $teachers = Teacher::select('teachers.id','teachers.name','teachers.department_id', 'departments.department_name')
        ->join('departments', 'teachers.department_id', '=', 'departments.id')
        ->get();

        $batches = BatchTest::where('batch_tests.test_id','=', $tId)
        ->join('batches','batch_tests.batch_id' , '=' , 'batches.id')
        ->get();
        return view('front-end.assign-teacher', ['teachers' => $teachers , 'batches' => $batches]);
       }
    }

    public function create_test()
    {
        $mcq = McqTest::get();
        $ShortQueTest = ShortQueTest::get();
        $ospTest = OspTest::get();
        $branches = Branch::where('deleted_at', NULL)->get();
        $subjects = Subject::where('deleted_at', NULL)->get();
        return view('front-end.create_test', ['branches' => $branches, 'subjects' => $subjects]);
    }

    public function mk_test_store(Request $r)
    {
        // return $r->all();
        // dd($r->all());
      
        $test = new Test();
        $test->teacher_id = Auth::user()->teacher_id;
        $test->test_name = $r->test_name;
        $test->subject_id = $r->main_subject_id;
        $test->marks = $r->marks;
        $test->duration = $r->duration;
        $test->branch = $r->branch_id;
        $test->date = $r->date;
        $test->osp_test_id = json_encode($r->osp_id);
        $test->shortans_test_id = json_encode($r->short_id);
        $test->mcq_test_id = json_encode($r->mcq_id);
        
        $viva = new Viva;
        $viva->viva_name = $r->viva_test_name;
        $viva->marks = $r->viva_marks;

       
      

        if ($viva->save()) {
            if (count($r->topic) > 0) {
                foreach ($r->topic as $t) {
                    if ($t != null) {
                        $vd = new VivaDetail;
                        $vd->topic = $t;
                        $vd->subject_id = $r->main_subject_id;
                        $vd->viva_id = $viva->id;
                        $vd->save();
                    }
                }
            }
        }
        $test->viva_name = $r->viva_test_name;
        $test->viva_marks = $r->viva_marks;
        $test->viva_id = $viva->id;

        if ($test->save()) {
            return redirect()->route('list-test')->with('msg', 'Test Created');
        } else {
            return redirect()->back();
        }
    }
    public function view_mcq()
    {
        $mcqTest = DB::table('mcq_tests')
            ->select('mcq_tests.id as test_id', 'mcq_tests.test_name', 'mcq_tests.marks', 'mcq_tests.duration', 'mcq_tests.no_of_que', 'branches.branch_name', 'subjects.subject')
            ->join('subjects', 'mcq_tests.subject_id', '=', 'subjects.id')
            ->join('branches', 'mcq_tests.branch_id', '=', 'branches.id')
            ->get();
        // dd($mcqTest);
        return view('front-end.view_mcq', ["McqTest" => $mcqTest]);
    }
    public function mcq_test()
    {
        $branch = Branch::where('deleted_at', NULL)->get();
        $subject = Subject::where('deleted_at', NULL)->get();
        return view('front-end.dummy', ["branch" => $branch, "subject" => $subject]);
    }
    //khushboo

    public function mk_mcq_test()
    {
        $branch = Branch::where('deleted_at', NULL)->get();
        $subject = Subject::where('deleted_at', NULL)->get();
        return view('front-end.mk_create-mcq', ["branch" => $branch, "subject" => $subject]);
    }

    public function mcq_test_store(Request $request)
    {
        // dd("helo"); 
        // $files = [];
        //  if($request->hasfile('image'))
        //  {
        //     foreach($request->file('image') as $file)
        //     {
        //         $name = time().rand(1,100).'.'.$file->extension();
        //         $file->move(public_path('mcq_images'), $name);
        //           $files[] = $name;
        //     }
        //  }

        //     dd($name);


        // $validData = $request->validate([

        //   'test_name' => 'required|string',
        //   'subject_id' => 'required|number',
        //   'marks' => 'required|number',
        //   'duration' => 'required|string',
        //   'branch_id' => 'required|number',
        //   'question' => 'required|number',
        //   'answer1' => 'required|string',
        //   'answer2' => 'required|string',
        //   'answer3' => 'required|string',
        //   'answer4' => 'required|string',
        //   'right_ans' => 'required|string',
        //   'que_marks' => 'required|number',

        // ]);

        // return $request->all();

       $validator =  $request->validate([
            'test_name' => 'required',
            'subject_id' => 'required',
            'marks' => 'required',
            'duration' => 'required',
            'branch_id' => 'required',
            'right_ans' => 'required',
            'que_marks' => 'required'
        ]);
        // dd($request->all());


        $request['teacher_id'] = Auth::user()->teacher_id;
        $McqTest = new McqTest();
        $McqTest->teacher_id = Auth::user()->teacher_id;
        $McqTest->test_name = $request->test_name;
        $McqTest->subject_id = $request->subject_id;
        $McqTest->marks = $request->marks;
        $McqTest->duration = $request->duration;
        $McqTest->no_of_que = $request->no_of_que;
        $McqTest->branch_id = $request->branch_id;
        $McqTest->save();

        $count = count($request->question);

        // echo "<pre>";
        // print_r($_FILES);
        // echo env('APP_URL');
        // die;

        if ($request->question and count($request->question) > 0) {
            foreach ($request->question as $key => $question) {
                $McqTestQuestion = new McqTestQuestion;
                $McqTestQuestion->mcq_test_id = $McqTest->id;
               
                if($request->hasFile('question_img')){
                    $question_img = $request->file('question_img')[$key];
                    $quest_img = Storage::disk('public_uploads')->put('mcq_img', $question_img);
                }else{
                    $quest_img = "";
                }
               
                if($request->hasFile('answer1_img')){
                    $answer1_img = $request->file('answer1_img')[$key];
                    $ans1_img = Storage::disk('public_uploads')->put('mcq_img', $answer1_img);
                }else{
                    $ans1_img = "";
                }
                if($request->hasFile('answer2_img')){
                    $answer2_img = $request->file('answer2_img')[$key];
                    $ans2_img = Storage::disk('public_uploads')->put('mcq_img', $answer2_img);
                }else{
                    $ans2_img = "";
                }
                if($request->hasFile('answer3_img')){
                    $answer3_img = $request->file('answer3_img')[$key];
                    $ans3_img = Storage::disk('public_uploads')->put('mcq_img', $answer3_img);
                }else{
                    $ans3_img = "";
                }
                if($request->hasFile('answer1_img')){
                    $answer4_img = $request->file('answer4_img')[$key];
                    $ans4_img = Storage::disk('public_uploads')->put('mcq_img', $answer4_img);
                }else{
                    $ans4_img = "";
                }
            
              
                
                // if($request->hasFile('question')){
                //     $project_image = $request->question[$key];
                //     $filename = time() . '.' . $project_image->getClientOriginalExtension();
                //     $destinationPath = 'mcq_img';
                //     $project_image->move($destinationPath, $filename);
                //     $McqTestQuestion->question = $filename;
                //  }
                //  if(!$request->hasFile('question')){
                //     $McqTestQuestion->question = $question;
                //  }
                
                    $McqTestQuestion->question = $question;
                    $McqTestQuestion->answer1 = $request->answer1[$key];
                    $McqTestQuestion->answer2 = $request->answer2[$key];
                    $McqTestQuestion->answer3 = $request->answer3[$key];
                    $McqTestQuestion->answer4 = $request->answer4[$key];

                    $McqTestQuestion->question_img = $quest_img;
                    $McqTestQuestion->answer1_img = $ans1_img;
                    $McqTestQuestion->answer2_img = $ans2_img;
                    $McqTestQuestion->answer3_img = $ans3_img;
                    $McqTestQuestion->answer4_img = $ans4_img;

                $McqTestQuestion->right_ans = $request->right_ans[$key];
                $McqTestQuestion->que_marks = $request->que_marks[$key];
                $McqTestQuestion->save();
            }
        }
        // $files = [];

        if ($McqTestQuestion) {
            return redirect('View_MCQ')->with('success', 'MCQ Test Create Successfully !');
        } else {
            return redirect('View_MCQ')->with('error', 'Failed to create MCQ Test ! Try again.');
        }
    }

    
    public function mk_mcq_bluk_img()
    {
          $bulk_img_mcqs = DB::table('bulk_img_mcqs')->orderBy('id', 'DESC')->get();

            return view('front-end.mk_mcq_bluk_img_view', ["bulk_img" => $bulk_img_mcqs]);

        // return view('front-end.mk_mcq_bluk_img_view');
    }
    
    public function bulk_img_mcq_upload(Request $request)
    {
        $validData = $request->validate([
            'bulk_img_mcq' => 'required',
        ]);
        $count = count($request->bulk_img_mcq);
        if ($count > 0) {
            foreach ($request->bulk_img_mcq as $key => $question) {
                $BulkImg_mcq = new BulkImg_mcq() ;
                $project_image = $request->bulk_img_mcq[$key];
                $filename = rand() . '.' . $project_image->getClientOriginalExtension();
                $destinationPath = 'mcq_img';
                $project_image->move($destinationPath, $filename);
                $project_path = $destinationPath.'/'.$filename;
                $BulkImg_mcq->image_name = $filename;
                $BulkImg_mcq->image_path = $project_path;
                $BulkImg_mcq->save();
            }
        }

        if ($BulkImg_mcq) {
            return redirect('MK_MCQ_bulk_img')->with('success', 'MCQ Test Create Successfully !');
        } else {
            return redirect('MK_MCQ_bulk_img')->with('error', 'Failed to create MCQ Test ! Try again.');
        }
    }



    public function mcq_test_store_excel(Request $request)
    {

        $validData = $request->validate([
            'file_xcl_imp' => 'required|mimes:xlsx, csv, xls',
            'test_name' => 'required',
            'subject_id' => 'required',
            'duration' => 'required',
            'branch_id' => 'required'
        ]);


        $path = storage_path() . '/app/' . request()->file('file_xcl_imp')->store('temp');
        $reader = new ReaderXlsx();
        $spreadsheet = $reader->load($path);
        $sheet = $spreadsheet->getActiveSheet();
        $worksheetInfo = $reader->listWorksheetInfo($path);

        $totalRows = $worksheetInfo[0]['totalRows'];

        if ($totalRows) {
            $total_marks = 0;
            $no_of_que = 0;
            for ($row = 2; $row <= $totalRows; $row++) {
                $S_no = $sheet->getCell("A{$row}")->getValue();
                $Question = $sheet->getCell("B{$row}")->getValue();
                $Question_img = $sheet->getCell("C{$row}")->getValue();
                $Answer1 = $sheet->getCell("D{$row}")->getValue();
                $Answer1_img = $sheet->getCell("E{$row}")->getValue();
                $Answer2 = $sheet->getCell("F{$row}")->getValue();
                $Answer2_img = $sheet->getCell("G{$row}")->getValue();
                $Answer3 = $sheet->getCell("H{$row}")->getValue();
                $Answer3_img = $sheet->getCell("I{$row}")->getValue();
                $Answer4 = $sheet->getCell("J{$row}")->getValue();
                $Answer4_img = $sheet->getCell("K{$row}")->getValue();
                $Right_ans = $sheet->getCell("L{$row}")->getValue();
                $Marks = $sheet->getCell("M{$row}")->getValue();
                //  echo "{$S_no}{$Question}{$Answer1}{$Answer2}{$Answer3}{$Answer4}{$Right_ans}{$Marks}".'<br>';
                $total_marks = $total_marks + $Marks;
                $no_of_que = $no_of_que + 1;
            }

        }

        //    dd($worksheetInfo);     


        $request['teacher_id'] = Auth::user()->teacher_id;
        $McqTest = new McqTest();
        $McqTest->teacher_id = Auth::user()->teacher_id;
        $McqTest->test_name = $request->test_name;
        $McqTest->subject_id = $request->subject_id;
        $McqTest->marks = $total_marks;
        $McqTest->duration = $request->duration;
        $McqTest->no_of_que = $no_of_que;
        $McqTest->branch_id = $request->branch_id;
        $McqTest->save();



        if ($totalRows) {
            for ($row = 2; $row <= $totalRows; $row++) {
                $S_no = $sheet->getCell("A{$row}")->getValue();
                $Question = $sheet->getCell("B{$row}")->getValue();
                $Question_img = $sheet->getCell("C{$row}")->getValue();
                $Answer1 = $sheet->getCell("D{$row}")->getValue();
                $Answer1_img = $sheet->getCell("E{$row}")->getValue();
                $Answer2 = $sheet->getCell("F{$row}")->getValue();
                $Answer2_img = $sheet->getCell("G{$row}")->getValue();
                $Answer3 = $sheet->getCell("H{$row}")->getValue();
                $Answer3_img = $sheet->getCell("I{$row}")->getValue();
                $Answer4 = $sheet->getCell("J{$row}")->getValue();
                $Answer4_img = $sheet->getCell("K{$row}")->getValue();
                $Right_ans = $sheet->getCell("L{$row}")->getValue();
                $Marks = $sheet->getCell("M{$row}")->getValue();

                $McqTestQuestion = new McqTestQuestion;
                $McqTestQuestion->mcq_test_id = $McqTest->id;
                $McqTestQuestion->question = $Question;
                $McqTestQuestion->question_img = $Question_img;
                $McqTestQuestion->answer1 = $Answer1;
                $McqTestQuestion->answer1_img = $Answer1_img;
                $McqTestQuestion->answer2 = $Answer2;
                $McqTestQuestion->answer2_img = $Answer2_img;
                $McqTestQuestion->answer3 = $Answer3;
                $McqTestQuestion->answer3_img = $Answer3_img;
                $McqTestQuestion->answer4 = $Answer4;
                $McqTestQuestion->answer4_img = $Answer4_img;
                $McqTestQuestion->right_ans = $Right_ans;
                $McqTestQuestion->que_marks = $Marks;
                $McqTestQuestion->save();
            }
        }


        if ($McqTestQuestion) {
            return redirect('View_MCQ')->with('success', 'MCQ Test Create Successfully !');
        } else {
            return redirect('View_MCQ')->with('error', 'Failed to create MCQ Test ! Try again.');
        }
    }
    public function short_que_create()
    {
        $branch = Branch::where('deleted_at', NULL)->get();
        $subject = Subject::where('deleted_at', NULL)->get();
        return view('front-end.mk-create-short-que', ["branch" => $branch, "subject" => $subject]);
    }

    public function short_que_store(Request $request)
    {
        //  $validData = $request->validate([

        //   'test_name' => 'required|string',
        //   'subject_id' => 'required|number',
        //   'marks' => 'required|number',
        //   'duration' => 'required|string',
        //   'branch_id' => 'required|number',
        //   'question' => 'required|number',
        //   'answer' => 'required|string',
        //   'que_marks' => 'required|number',

        // ]);

        // return $request->all();
        $ShortQueTest = new ShortQueTest;
        $ShortQueTest->teacher_id = Auth::user()->teacher_id;
        $ShortQueTest->test_name = $request->test_name;
        $ShortQueTest->subject_id = $request->subject_id;
        $ShortQueTest->marks = $request->marks;
        $ShortQueTest->duration = $request->duration;
        $ShortQueTest->no_of_que = $request->no_of_que;
        $ShortQueTest->branch_id = $request->branch_id;
        $ShortQueTest->save();

        $count = count($request->question);

        if ($request->question and count($request->question) > 0) {
            foreach ($request->question as $key => $question) {
                $ShortQuestionTest = new ShortQuestionTest;
                $ShortQuestionTest->short_que_id = $ShortQueTest->id;
                $ShortQuestionTest->question = $question;
                $ShortQuestionTest->answer = $request->answer[$key];
                $ShortQuestionTest->time_duration = $request->time_duration[$key];
                $ShortQuestionTest->que_marks = $request->que_marks[$key];

                if($request->hasFile('question_img')){
                    $question_img = $request->file('question_img')[$key];
                    $quest_img = Storage::disk('public_uploads')->put('short_img', $question_img);
                }else{
                    $quest_img = "";
                }

                $ShortQuestionTest->image = $quest_img;
                $ShortQuestionTest->save();
            }
        }

        if ($ShortQuestionTest) {
            return redirect('short_view')->with('success', 'Short Answer Test Create Successfully !');
        } else {
            return redirect('short_view')->with('error', 'Failed to create Short Answer Test ! Try again.');
        }
    }

    //for excel
    public function short_que_store_excel(Request $request)
    {

        $request->validate([
            'file_xcl_imp' => 'required|mimes:xlsx, csv, xls',
            'test_name' => 'required',
            'subject_id' => 'required',
            'branch_id' => 'required'
        ]);

        $path = storage_path() . '/app/' . request()->file('file_xcl_imp')->store('temp');
        $reader = new ReaderXlsx();
        $spreadsheet = $reader->load($path);
        $sheet = $spreadsheet->getActiveSheet();
        $worksheetInfo = $reader->listWorksheetInfo($path);

        $totalRows = $worksheetInfo[0]['totalRows'];
        //     for($row = 2; $row <= $totalRows; $row++){
        //       $S_no = $sheet->getCell("A{$row}")->getValue();
        //       $Question = $sheet->getCell("B{$row}")->getValue();
        //       $Answer = $sheet->getCell("C{$row}")->getValue();
        //       $Duration = $sheet->getCell("D{$row}")->getValue();
        //       $Marks = $sheet->getCell("E{$row}")->getValue();


        //       echo "{$S_no}{$Question}{$Answer}{$Duration}{$Marks}".'<br>';

        //   }
        // echo  $totalRows+1;   
        // dd($worksheetInfo);                

        if ($totalRows) {
            $total_qtn = 0;
            $total_dur = 0;
            $total_mar = 0;
            for ($row = 2; $row <= $totalRows; $row++) {
                $Question = $sheet->getCell("B{$row}")->getValue();
                $Question_img = $sheet->getCell("C{$row}")->getValue();
                $answer = $sheet->getCell("D{$row}")->getValue();
                $Duration = $sheet->getCell("E{$row}")->getValue();
                $Marks = $sheet->getCell("F{$row}")->getValue();
                $total_qtn = $total_qtn + 1;
                $total_dur = $total_dur + $Duration;
                $total_mar = $total_mar + $Marks;
            }
        }

        $ShortQueTest = new ShortQueTest;
        $ShortQueTest->test_name = $request->test_name;
        $ShortQueTest->subject_id = $request->subject_id;
        $ShortQueTest->marks = $total_mar;
        $ShortQueTest->duration = $total_dur;
        $ShortQueTest->no_of_que = $total_qtn;
        $ShortQueTest->branch_id = $request->branch_id;
        $ShortQueTest->save();


        if ($totalRows) {
            for ($row = 2; $row <= $totalRows; $row++) {
                $question = $sheet->getCell("B{$row}")->getValue();
                $question_img = $sheet->getCell("C{$row}")->getValue();
                $answer = $sheet->getCell("D{$row}")->getValue();
                $duration = $sheet->getCell("E{$row}")->getValue();
                $marks = $sheet->getCell("F{$row}")->getValue();
                $ShortQuestionTest = new ShortQuestionTest;
                $ShortQuestionTest->short_que_id = $ShortQueTest->id;
                if($question){
                    $ShortQuestionTest->question = $question;
                }else{
                    $ShortQuestionTest->question = "";
                }
                if($question_img){
                    $ShortQuestionTest->image = $question_img;
                }else{
                    $ShortQuestionTest->image = "";
                }
                $ShortQuestionTest->answer = $answer;
                $ShortQuestionTest->time_duration = $duration;
                $ShortQuestionTest->que_marks = $marks;
                $ShortQuestionTest->save();
            }
        }


        if ($ShortQuestionTest) {
            return redirect('short_view')->with('success', 'Short Answer Test Create Successfully !');
        } else {
            return redirect('short_view')->with('error', 'Failed to create Short Answer Test ! Try again.');
        }
    }


    public function mk_short_bluk_img()
    {
          $bulk_img_short = DB::table('bulk_img_shorts')->orderBy('id', 'DESC')->get();

            return view('front-end.mk_short_bluk_img_view', ["bulk_img" => $bulk_img_short]);

        //  return view('front-end.mk_short_bluk_img_view');
    }
    
    public function bulk_img_short_upload(Request $request)
    {
        $validData = $request->validate([
            'bulk_img_short' => 'required',
        ]);
        $count = count($request->bulk_img_short);
        if ($count > 0) {
            foreach ($request->bulk_img_short as $key => $question) {
                $BulkImg_short = new BulkImg_short() ;
                $project_image = $request->bulk_img_short[$key];
                $filename = rand() . '.' . $project_image->getClientOriginalExtension();
                $destinationPath = 'short_img';
                $project_image->move($destinationPath, $filename);
                $project_path = $destinationPath.'/'.$filename;
                $BulkImg_short->image_name = $filename;
                $BulkImg_short->image_path = $project_path;
                $BulkImg_short->save();
            }
        }

        if ($BulkImg_short) {
            return redirect('MK-short-que_img')->with('success', 'MCQ Test Create Successfully !');
        } else {
            return redirect('MK-short-que_img')->with('error', 'Failed to create MCQ Test ! Try again.');
        }
    }



    public function mk_create_osplist()
    {
        $branch = Branch::where('deleted_at', NULL)->get();
        $subject = Subject::where('deleted_at', NULL)->get();
        return view('front-end.mk-create-osplist', ["branch" => $branch, "subject" => $subject]);
    }
    public function mk_store_osplist_excel(Request $request)
    {


        $path = storage_path() . '/app/' . request()->file('file_xcl_imp')->store('temp');
        $reader = new ReaderXlsx();
        $spreadsheet = $reader->load($path);
        $sheet = $spreadsheet->getActiveSheet();
        $worksheetInfo = $reader->listWorksheetInfo($path);

        $totalRows = $worksheetInfo[0]['totalRows'];
        //       for($row = 2; $row <= $totalRows; $row++){
        //         $S_no = $sheet->getCell("A{$row}")->getValue();
        //         $Question = $sheet->getCell("B{$row}")->getValue();
        //         $marks = $sheet->getCell("C{$row}")->getValue();
        //         $step_1 = $sheet->getCell("D{$row}")->getValue();
        //         $step_2 = $sheet->getCell("E{$row}")->getValue();
        //         $step_3 = $sheet->getCell("F{$row}")->getValue();
        //         $step_4 = $sheet->getCell("G{$row}")->getValue();
        //         $step_5 = $sheet->getCell("H{$row}")->getValue();
        //         $step_6 = $sheet->getCell("I{$row}")->getValue();
        //         $step_7 = $sheet->getCell("J{$row}")->getValue();
        //         $step_8 = $sheet->getCell("K{$row}")->getValue();
        //         $step_9 = $sheet->getCell("L{$row}")->getValue();
        //         $step_10 = $sheet->getCell("M{$row}")->getValue();

        //         echo "{$S_no}{$Question}{$marks}{$step_1}{$step_2}{$step_3}{$step_4}{$step_5}{$step_6}{$step_7}{$step_8}{$step_9}{$step_10}".'<br>';
        //         // $post->file_xcl_imp = "{$S_no}{$Question}{$marks}{$step_1}{$step_2}{$step_3}{$step_4}{$step_5}".'<br>';
        //         // $post->save();
        //     }                    
        //    dd($worksheetInfo);  

        //     dd($totalRows);



        $request->validate([
            'file_xcl_imp' => 'required|mimes:xlsx, csv, xls',
            'test_name' => 'required',
            'subject_id' => 'required',
            'branch_id' => 'required',
            'duration' => 'required'
        ]);





        $OspTest = new OspTest;

        $OspTest->test_name = $request->test_name;
        $OspTest->teacher_id = Auth::user()->teacher_id;
        $OspTest->subject_id = $request->subject_id;
        $OspTest->duration = $request->duration;
        $OspTest->branch_id = $request->branch_id;

        if ($totalRows) {
            $sum_marks = 0;
            for ($row = 2; $row < $totalRows + 1; $row++) {
                $marks = $sheet->getCell("C{$row}")->getValue();
                $sum_marks = $sum_marks + (int) $marks;
            }
        }
        $OspTest->marks = $sum_marks;
        $OspTest->no_of_que = $totalRows - 1;

        $OspTest->save();


        // chetan raghuvanshi - new         

        if ($totalRows) {

            // insert data into quesions table

            for ($row = 2; $row < $totalRows + 1; $row++) {

                $question = $sheet->getCell("B{$row}")->getValue();
                $marks = $sheet->getCell("C{$row}")->getValue();

                $OspQuestionTest = new OspQuestionTest;
                $OspQuestionTest->osp_test_id = $OspTest->id;
                $OspQuestionTest->question = $question;

                $steps = [];
                $no_of_step_int = 0;
                foreach (range('D', 'X') as $col) {
                    if (!empty($sheet->getCell("{$col}{$row}")->getValue())) {
                        $steps[] = $sheet->getCell("{$col}{$row}")->getValue();
                        $no_of_step_int = $no_of_step_int + 1;
                    }
                }
                $OspQuestionTest->no_of_step = $no_of_step_int;
                $OspQuestionTest->que_marks = $marks;
                $OspQuestionTest->save();


                // dd($steps);

                foreach ($steps as $step) {
                    $ques_ans = new OspTestQuesAnswer;
                    $ques_ans->osp_tests_id = $OspTest->id;
                    $ques_ans->osp_question_tests_id = $OspQuestionTest->id;
                    $ques_ans->answer = $step;
                    $ques_ans->save();
                }
            }
        }

        if ($OspQuestionTest) {
            return redirect('opslist_view')->with('success', 'OSP Create Successfully !');
        } else {
            return redirect('opslist_view')->with('error', 'Failed to create OSP Test ! Try again.');
        }
    }


    public function mk_store_osplist(Request $request)
    {


        // return $request->answer[0];
        // dd($request->all());
        $OspTest = new OspTest;

        $OspTest->test_name = $request->test_name;
        $OspTest->teacher_id = Auth::user()->teacher_id;
        $OspTest->subject_id = $request->subject_id;
        $OspTest->marks = $request->marks;
        $OspTest->duration = $request->duration;
        $OspTest->no_of_que = $request->no_of_que;
        $OspTest->branch_id = $request->branch_id;
        $OspTest->save();

        if ($request->question and count($request->question) > 0) {
            // khushbooo - new

            foreach ($request->question as $key => $question) {
                // insert data into quesions table
                $OspQuestionTest = new OspQuestionTest;
                $OspQuestionTest->osp_test_id = $OspTest->id;
                $OspQuestionTest->question = $question;
                $OspQuestionTest->no_of_step = $request->no_of_step[$key];
                $OspQuestionTest->que_marks = $request->que_marks[$key];
                $OspQuestionTest->save();

                foreach ($request->answer[$key] as $ans) {
                    $ques_ans = new OspTestQuesAnswer;
                    $ques_ans->osp_tests_id = $OspTest->id;
                    $ques_ans->osp_question_tests_id = $OspQuestionTest->id;
                    $ques_ans->answer = $ans;
                    $ques_ans->save();
                }
            }


            // khushboo - new

            // 			foreach($request->question as $key => $question){
            // 				$OspQuestionTest = new OspQuestionTest;
            // 				$OspQuestionTest->osp_test_id	 = $OspTest->id;
            // 				$OspQuestionTest->question =  $question;
            // 				$OspQuestionTest->no_of_step =  $request->no_of_step[$key];
            // 			    $Arr = [];
            // 			    $array1 = [];
            // 				foreach($request->no_of_step as $k=>$val)
            // 				{
            // 				    foreach($request->answer as $key1=>$value){
            // 				        $Arr[$key1] = $value;
            // 				        // return $arr;
            // 				        foreach($Arr as $key2 =>$array){
            // 				            // return $array;
            // 				            $array1[$key2]=$array;
            //       			          $OspQuestionTest->answer = json_encode($array1);
            // 				        }

            // 				    }

            // 				}

            // 				// $OspQuestionTest = $request->no_of_step;
            // 				// for($i=1; $i<$request->no_of_step;$i++ ){
            // 				//     $key1 = "answer".$i.$OspQuestionTest[$i-1];
            // 				//     $answer = $request->$key1;
            // 				//     	$OspQuestionTest->answer =  $answer;
            //     //     				$OspQuestionTest->que_marks =  $request->que_marks[$key];
            //     //     				$OspQuestionTest->save();
            // 				//     // print_r($answer);
            // 				//     // echo "<br/>";
            // 				// }
            // 				// $OspQuestionTest->answer =  json_encode($request->answer);

            // 				$OspQuestionTest->que_marks =  $request->que_marks[$key];
            // 				$OspQuestionTest->save();
            // 			}
        }

        if ($OspQuestionTest) {
            return redirect('opslist_view')->with('success', 'OSP Create Successfully !');
        } else {
            return redirect('opslist_view')->with('error', 'Failed to create OSP Test ! Try again.');
        }
    }

    public function mk_test_create()
    {
        return view('front-end.mk-test-create');
    }
    public function mk_test()
    {
        return view('front-end.mk-test');
    }
    //khushboo

    public function short_view_test()
    {
        $ShortQueTest = ShortQueTest::get();
        return view('front-end.short_view_test', ["ShortQueTest" => $ShortQueTest]);
    }
    public function short_assign()
    {
        return view('front-end.assign_short');
    }
    public function short_create()
    {
        return view('front-end.create_short');
    }
    public function opslist_view_test()
    {
        $OspTest = OspTest::get();
        return view('front-end.opslist_view_test', ["OspTest" => $OspTest]);
    }
    public function opslist_assign()
    {
        return view('front-end.opslist_assign');
    }
    public function opslist_create()
    {

        return view('front-end.create_opslist');
    }
    public function View_details_test()
    {
        return view('front-end.view_details_test');
    }
    public function View_details_mcq($id)
    {
       
        $McqTestQuestion = McqTestQuestion::where('mcq_test_id', $id)->get();
        $extension = config('global.EXTENSION');
        return view('front-end.view-details_mcq', ["McqTestQuestion" => $McqTestQuestion , "extension" => $extension , 'id' => $id]);
    }
    public function View_details_short($id)
    {
        $ShortQuestionTest = ShortQuestionTest::where('short_que_id', $id)->get();
        return view('front-end.view-details_short', ["ShortQuestionTest" => $ShortQuestionTest , 'id' => $id]);
    }
    public function View_details_opslist($id)
    {
        $OspQuestionTest = OspQuestionTest::where('osp_test_id', $id)->get();
        return view('front-end.view-details_opslist', ["OspQuestionTest" => $OspQuestionTest, 'id' => $id]);
    }
    public function create_mcq_question()
    {
        return view('front-end.Create_MCQ');
    }
    public function create_short_question()
    {
        return view('front-end.Create_short_question');
    }
    public function create_opslist_question()
    {
        return view('front-end.Create_opslist_question');
    }
    public function assign_student($tId)
    {
        $batches = Batch::all();

        session(['tId' => $tId]);
        return view('front-end.aasign-student', ['batches' => $batches]);
    }
    public function assign_teacher($tId)
    {
        session(['tId' => $tId]);
        $teachers = Teacher::all();
        return view('front-end.assign-teacher', ['teachers' => $teachers]);
    }
    public function assign_modules($tId)
    {
        // dd($tId);
        session(['tId' => $tId]);
        list($test, $mcq_test, $shortAns_test, $osp_test, $branch, $subject) = TestHelper::testFullDetails($tId);
        return view('front-end.assign_modules', ['test' => $test, 'mcq_tests' => $mcq_test, 'short_tests' => $shortAns_test, 'osp_tests' => $osp_test, "branch" => $branch, "subject" => $subject]);
    }
    public function student_profile()
    {
        $student_id = User::where('student_id', Auth::user()->student_id)->where('user_type', 'Student')->first();
        $student = Student::where('id', $student_id->student_id)->first();

        return view('front-end.profile', ["student" => $student]);
    }
    public function student_test_report()
    {
        return view('front-end.test-report');
    }
    public function student_new_test()
    {
        return view('front-end.new-test');
    }

    public function  paper_login_check(Request $request)
    {
        $validData = $request->validate([
            'getTestId' => 'required',
            'Student_Id' => 'required',
            'pwd' => 'required'
        ]);
        
        if($validData){
        $student = StudentTest::where('test_id', $request->getTestId)
        ->where('student_id', $request->Student_Id)
        ->where('password_login', $request->pwd)
        ->first();  
        if($student){
        //   dd($student->test_id);
               $tests = Test::where('id',"=", $student->test_id)->get()->first();
               return view('paper_view.question_paper', ['tests' => $tests]);
        }
         }else{
            return view('front-end.new-test');
         }
         
    }

    public function student_test_report_download()
    {
        return view('front-end.test-report-details');
    }
    public function student_batch($bId)
    {
        $students = Student::where('batch_id', $bId)->get();

        return view('front-end.student-view', ['students' => $students]);
    }
    public function assign_short_answer($sQueId)
    {
        $shortQue = DB::table('short_que_tests')
            ->select('short_que_tests.*', 'branches.branch_name', 'subjects.subject')
            ->join('branches', 'short_que_tests.branch_id', '=', 'branches.id')
            ->join('subjects', 'short_que_tests.subject_id', '=', 'subjects.id')
            ->where('short_que_tests.id', $sQueId)
            ->first();
        return view('front-end.assign_short_answer_copy', ['shortQue' => $shortQue , 'sQueId'=>$sQueId]);
    }

    public function assign_osp($oQueId)
    {
        $ospQue = DB::table('osp_tests')
            ->select('osp_tests.*', 'branches.branch_name', 'subjects.subject')
            ->join('branches', 'osp_tests.branch_id', '=', 'branches.id')
            ->join('subjects', 'osp_tests.subject_id', '=', 'subjects.id')
            ->where('osp_tests.id', $oQueId)
            ->first();
        return view('front-end.assign_Opslist', ['ospQue' => $ospQue , 'oQueId' => $oQueId]);
    }

    // public function assign_Opslist()
    // {
    //     return view('front-end.assign_Opslist');
    // }
    public function assign_viva()
    {
        $test = Test::find(session('tId'));

        return view('front-end.assign_viva', ['test' => $test]);
    }
    public function session_reports()
    {
        return view('front-end.session_report');
    }
    public function assign_session()
    {
        //   dd(Auth::user()->teacher_id);
        $test = DB::table('tests')
        ->select('tests.id', 'tests.test_name', 'tests.marks', 'tests.duration', 'tests.date', 'subjects.subject', 'branches.branch_name' , 'teacher_tests.assign_modules_id')
        ->join('branches', 'tests.branch', '=', 'branches.id')
        ->join('subjects', 'tests.subject_id', '=', 'subjects.id')
        ->join('teacher_tests', 'teacher_tests.test_id', '=', 'tests.id')
        ->where('teacher_tests.teacher_id' , '=' , Auth::user()->teacher_id)
        ->get();
          //   dd($test);

        // $teacher_tests = DB::table('teacher_tests')
        // ->where('teacher_tests.teacher_id' , '=' , Auth::user()->teacher_id)
        // ->get();


        $sql = 'select tests.test_name,assign_modules.teacher_id as teacherId, assign_modules.test_id as assingedTestId ,GROUP_CONCAT( assign_modules.ospque_id) as assignedOspTestId , GROUP_CONCAT(assign_modules.shortQue_id) as assignedShortTestId ,GROUP_CONCAT(assign_modules.viva_id) as assignedVivaId , tests.marks , tests.duration , branches.branch_name , subjects.subject ,GROUP_CONCAT( osp_tests.test_name) as ospTestName ,GROUP_CONCAT( osp_tests.marks ) as ospTestMarks,sum( osp_tests.marks ) as ospTestMarksSum ,GROUP_CONCAT( osp_tests.duration ) as osp_duration,sum( osp_tests.duration ) as osp_duration_sum, GROUP_CONCAT(short_que_tests.test_name)  as shortTestName,GROUP_CONCAT(short_que_tests.marks) as shortTestMarks
        ,sum(short_que_tests.marks) as shortTestMarksSum,GROUP_CONCAT(short_que_tests.duration) as short_duration
        ,SUM(short_que_tests.duration) as short_duration_sum, GROUP_CONCAT( vivas.viva_name) as vivaName  ,GROUP_CONCAT( vivas.marks) as vivaMarks,sum( vivas.marks) as vivaMarksSum
        
                 FROM assign_modules 
                 JOIN tests on tests.id = assign_modules.test_id
                 join branches on branches.id = tests.branch
                 join subjects on subjects.id = tests.subject_id
                 Left join  osp_tests on osp_tests.id = assign_modules.ospque_id
                 Left join  short_que_tests on short_que_tests.id =  assign_modules.shortQue_id
                 Left join  vivas on vivas.id = assign_modules.viva_id
                 
                 GROUP by assign_modules.test_id  
        ORDER BY `tests`.`test_name` ASC;';   
        $modules_tests =  DB::select($sql);
        // echo "<pre>";
        // print_r($modules_tests);
        // echo "<pre>";
        // die();
      
        return view('front-end.assign_session', ['modules_tests' => $modules_tests , 'test' => $test ]);
    }
    public function test_report_session()
    {
        return view('front-end.test-report-session');
    }
    public function test_report_session_details()
    {
        return view('front-end.test-report-details-session');
    }
    public function test_view($id)
    {
        $test = Test::find($id);

        if ($test == null) {
            return redirect('View_test');
        }
        $branch = Branch::find($test->branch);
        $subject = Subject::find($test->subject_id);

        $mcq_ids = json_decode($test->mcq_test_id);
        $shortAns_ids = json_decode($test->shortans_test_id);
        $ospAns_ids = json_decode($test->osp_test_id);
       

        $mcq_test = DB::table("mcq_tests")
            ->join("subjects", function ($join) {
                $join->on("mcq_tests.subject_id", "=", "subjects.id");
            })
            ->select("mcq_tests.id as mcqt_id", "mcq_tests.test_name", "mcq_tests.created_at", "mcq_tests.marks", "subjects.subject")
            ->whereIn("mcq_tests.id", $mcq_ids)
            ->get();

            // dd($mcq_test);

        $shortAns_test = DB::table("short_que_tests")
            ->join("subjects", function ($join) {
                $join->on("short_que_tests.subject_id", "=", "subjects.id");
            })
            ->select("short_que_tests.id as short_id", "short_que_tests.test_name", "short_que_tests.marks", "short_que_tests.created_at", "subjects.subject")
            ->whereIn("short_que_tests.id", $shortAns_ids)
            ->get();

        $osp_test = DB::table("osp_tests")
            ->join("subjects", function ($join) {
                $join->on("osp_tests.subject_id", "=", "subjects.id");
            })
            ->select("osp_tests.id as ospt_id", "osp_tests.test_name", "osp_tests.marks", "osp_tests.created_at", "subjects.subject")
            ->whereIn("osp_tests.id", $ospAns_ids)
            ->get();

         $viva_id_topic = DB::table("viva_details")
         ->select("topic")
         ->where( 'viva_id' , '=' , $test->viva_id )->get();  
        //  dd($viva_id); 

        return view('front-end.test_view', ['test' => $test, 'mcq_tests' => $mcq_test, 'short_tests' => $shortAns_test, 'osp_tests' => $osp_test, "branch" => $branch, "subject" => $subject , "viva_id_topic" => $viva_id_topic]);
    }
    public function model_test_view($id)
    {
        dd($id);
        $test = Test::find($id);

        dd($test);

        // if ($test == null) {
        //     return redirect('View_test');
        // }
        // $branch = Branch::find($test->branch);
        // $subject = Subject::find($test->subject_id);

        // $mcq_ids = json_decode($test->mcq_test_id);
        // $shortAns_ids = json_decode($test->shortans_test_id);
        // $ospAns_ids = json_decode($test->osp_test_id);

        // $mcq_test = DB::table("mcq_tests")
        //     ->join("subjects", function ($join) {
        //         $join->on("mcq_tests.subject_id", "=", "subjects.id");
        //     })
        //     ->select("mcq_tests.id as mcqt_id", "mcq_tests.test_name", "mcq_tests.created_at", "mcq_tests.marks", "subjects.subject")
        //     ->whereIn("mcq_tests.id", $mcq_ids)
        //     ->get();

        //     // dd($mcq_test);

        // $shortAns_test = DB::table("short_que_tests")
        //     ->join("subjects", function ($join) {
        //         $join->on("short_que_tests.subject_id", "=", "subjects.id");
        //     })
        //     ->select("short_que_tests.id as short_id", "short_que_tests.test_name", "short_que_tests.marks", "short_que_tests.created_at", "subjects.subject")
        //     ->whereIn("short_que_tests.id", $shortAns_ids)
        //     ->get();

        // $osp_test = DB::table("osp_tests")
        //     ->join("subjects", function ($join) {
        //         $join->on("osp_tests.subject_id", "=", "subjects.id");
        //     })
        //     ->select("osp_tests.id as ospt_id", "osp_tests.test_name", "osp_tests.marks", "osp_tests.created_at", "subjects.subject")
        //     ->whereIn("osp_tests.id", $ospAns_ids)
        //     ->get();


        // return view('front-end.test_view', ['test' => $test, 'mcq_tests' => $mcq_test, 'short_tests' => $shortAns_test, 'osp_tests' => $osp_test, "branch" => $branch, "subject" => $subject]);
    }
    
}