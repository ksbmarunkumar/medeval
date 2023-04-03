<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeacherNotify;
use Illuminate\Support\Facades\Auth;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Batch;
use App\Models\StudentNotify;
use Illuminate\Support\Facades\Storage;

class NotificationController extends Controller
{
    public function index()
    {
        $TeacherNotify = TeacherNotify::where("deleted_at",NULL)->get();
        return view('notification.view',["TeacherNotify"=>$TeacherNotify]);
    }
    public function create(Request $request)
    {
        $teacher = Teacher::where('deleted_at',NULL)->get();
        return view('notification.create',["teacher"=>$teacher]);
    }
    
    public function store(Request $request)
    {
        if($request->ref_mult_drop == "department_drop"){
            $req_departments = $request->department_id;
            foreach($req_departments as $req_department){
                $teach = Teacher::where('department_id', $req_department)->get();
                $teach_array_datas = json_decode($teach);
                foreach($teach_array_datas as $teacher_id)
                {        
                    $TeacherNotify = new TeacherNotify;
                    $TeacherNotify->title = $request->title;
                    $TeacherNotify->message = $request->message;
                    $TeacherNotify->user_id = $teacher_id->id;
                    $TeacherNotify->send_by = Auth::user()->id;
                        if($request->hasFile('image')){
                            $image = $request->file('image');
                            $new_name = Storage::disk('public_uploads')->put('teacherNotify_images', $request->file('image'));;
                            $TeacherNotify->image = $new_name;
                        }
                    $TeacherNotify->save();
                }

            }
        }else{
        
            $req = $request->user_id;
            foreach($req as $teacher_id)
            {        
                $TeacherNotify = new TeacherNotify;
                $TeacherNotify->title = $request->title;
                $TeacherNotify->message = $request->message;
                $TeacherNotify->user_id = $teacher_id;
                $TeacherNotify->send_by = Auth::user()->id;
                    if($request->hasFile('image')){
                        $image = $request->file('image');
                        $new_name = Storage::disk('public_uploads')->put('teacherNotify_images', $request->file('image'));;
                        $TeacherNotify->image = $new_name;
                    }
                $TeacherNotify->save();
            }

        }
         if($TeacherNotify){
                return redirect('notify')->with('success', 'Notification Create Successfully !');
            }else{
                return redirect('notify')->with('error', 'Failed to create Notification ! Try again.');
            }
    }
    
    public function delete($id)
    {
        $TeacherNotify = TeacherNotify::find($id);
        if($TeacherNotify){
            $mytime = \Carbon\Carbon::now()->format('Y-m-d');
            $TeacherNotify   = TeacherNotify::where('id',$id)->update(['deleted_at'=>$mytime]);

            return redirect('notify')->with('success', 'TeacherNotify removed!');
        }else{
            return redirect('notify')->with('error', 'TeacherNotify not found');
        }
    }
    
    public function showStudent()
    {
         $StudentNotify = StudentNotify::where("deleted_at",NULL)->get();
        return view('notification.view-student',["StudentNotify"=>$StudentNotify]);
    }
    
    public function createStudent(Request $request)
    {
        $student = Student::where('deleted_at',NULL)->get();
        return view('notification.create-student',["student"=>$student]);
    }
    
    public function storeStudent(Request $request)
    {
        //  dd($request->all());
        if($request->ref_mult_drop == "batch_drop"){
            $req_batchs = $request->batche_id;

            foreach($req_batchs as $req_batch){
            $stu = Student::where('batch_id', $req_batch)->get();
            $stu_array_datas = json_decode($stu);
            // dd($stu_array_datas);

                foreach($stu_array_datas as $student_id)
                {        
                    $StudentNotify = new StudentNotify;
                    $StudentNotify->title = $request->title;
                    $StudentNotify->message = $request->message;
                    $StudentNotify->student_id = $student_id->id;
                    $StudentNotify->send_by = Auth::user()->id;
                        if($request->hasFile('image')){
                            $image = $request->file('image');
                            $filename = Storage::disk('public_uploads')->put('studentNotify_images', $request->file('image'));;
                            $StudentNotify->image = $filename;
                        }
                    $StudentNotify->save();
            }
        }
        }else{
            $req = $request->student_id;
            foreach($req as $student_id)
            {        
                $StudentNotify = new StudentNotify;
                $StudentNotify->title = $request->title;
                $StudentNotify->message = $request->message;
                $StudentNotify->student_id = $student_id;
                $StudentNotify->send_by = Auth::user()->id;
                    if($request->hasFile('image')){
                        // $image = $request->file('image');
                        //     $filename = time() . '.' . $image->getClientOriginalExtension();
                        //     $destinationPath = 'studentNotify_images';
                        //     $image->move($destinationPath, $filename);
                        //     $StudentNotify->image = $filename;

                        $image = $request->file('image');
                        $filename = Storage::disk('public_uploads')->put('studentNotify_images', $request->file('image'));;
                        $StudentNotify->image = $filename;
                    }
                    
                $StudentNotify->save();
        }
      
        }

         if($StudentNotify){
                return redirect('studentNotifies')->with('success', 'Notification Create Successfully !');
            }else{
                return redirect('studentNotifies')->with('error', 'Failed to create Notification ! Try again.');
            }
    }
    
    public function studentDelete($id)
    {
        $StudentNotify = StudentNotify::find($id);
        if($StudentNotify){
            $mytime = \Carbon\Carbon::now()->format('Y-m-d');
            $StudentNotify   = $StudentNotify::where('id',$id)->update(['deleted_at'=>$mytime]);

            return redirect('studentNotifies')->with('success', 'StudentNotify removed!');
        }else{
            return redirect('studentNotifies')->with('error', 'StudentNotify not found');
        }
    }
    
}
