<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Student;
use App\Models\Branch;
use App\Models\Semester;
use App\Models\Batch;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::where('deleted_at',NULL)->get();
        return view('student.view',["student"=>$student]);
    }
    public function create()
    {
        try
        { 
            $branch = Branch::where('deleted_at',NULL)->get();
            $semester = Semester::where('deleted_at',NULL)->get();
            $batch = Batch::where('deleted_at',NULL)->get();
            
            return view('student.create',["branch"=>$branch,"semester"=>$semester,"batch"=>$batch]);

        }catch (\Exception $e) {
            $bug = $e->getMessage();
            dd($bug);
            return redirect()->back()->with('error', $bug);

        }
    }
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'name' => 'required|string',
            'mobile' => 'required|digits:10',
            'email' => 'required|email|unique:students',
            'password' => 'required|string|min:8',
            'admission_no' => 'required|string',
            'branch' => 'required|string',
            
            ]);
        try
        {        
            $student = new Student;
            $student->name = $request->name;
            $student->mobile_no = $request->mobile;
            $student->email = $request->email;
            $student->password = Hash::make($request->password);
            $student->branch = $request->branch;
            $student->univercity_id = $request->univercity_id;
            $student->admission_no = $request->admission_no;
            $student->student_code = rand(0,999999);
            $student->semester_id = $request->semester_id;
            $student->year_of_joining = $request->year_of_joining;
            $student->section = $request->section;
            $student->batch_id = $request->batch_id;
            if($request->hasFile('image')){
                $image = $request->file('image');
                $filename = Storage::disk('public_uploads')->put('student_images', $request->file('image'));
            }else{
                $filename = "";
            }
            $student->image = $filename;
            $student->save();

            $user = new User;
            $user->name = $student->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->user_type = 'Student';
            $user->student_id = $student->id;
            $user->status_id = $request->Status_student_id;
            $user->image = $filename;
            $user->save();

            if($student){
                return redirect('students')->with('success', 'Student Create Successfully !');
            }else{
                return redirect('students')->with('error', 'Failed to create Student ! Try again.');
            }
        
            
        }catch (\Exception $e) {
            $bug = $e->getMessage();
            dd($bug);
            return redirect()->back()->with('error', $bug);
        }
    }
    
    public function edit($id)
    {
        try
        {
            $student  = Student::find($id);
            $branch = Branch::where('deleted_at',NULL)->get();
            $semester = Semester::where('deleted_at',NULL)->get();
            $batch = Batch::where('deleted_at',NULL)->get();
            $user_detail = User::where('student_id',$id)->get()->first();
            // dd($user_detail->image);
            $user_img = $user_detail->image;
            $user_status_id = $user_detail->status_id;
            $user_password = $user_detail->password;
            return view('student.edit', compact('student','branch','semester','batch','user_img','user_status_id','user_password'));
        }catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', $bug);
        }
    }
    
      public function update(Request $request)
    {

        // update user info
         $request->validate([
            'id'       => 'required',
            'email' => 'required',
        ]);

        // check validation for password match
        // if(isset($request->password)){
        //     $validator = Validator::make($request->all(), [
        //         'password' => 'required | confirmed'
        //     ]);
        // }

    //   dd($request->all());
    
        try{

            if($request->hasFile('image')){
                $image = $request->file('image');
                $filename = Storage::disk('public_uploads')->put('student_images', $request->file('image'));
            }else{
                $filename = $request->image_old;
            }
          
            $user = User::where('student_id',$request->id)->where('user_type','Student')->first();

           $update =  [
                'name' => $request->name,
                'email' => $request->email,
                'status_id' => $request->statusStu,
                'image' => $filename
            ];
            
          

            $update = $user->update($update);
            
            $student = Student::find($request->id);
            
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'semester_id' => $request->semester_id,
                'year_of_joining' => $request->year_of_joining,
                'section' => $request->section,
                'branch' => $request->branch,
                'mobile_no' => $request->mobile,
                'batch_id' => $request->batch_id,
                'image' => $filename
                ];
            $data = $student->update($data);    
            
            if($student){
                 return redirect('students')->with('success', 'Student information updated succesfully!');
            }else{
                return redirect()->back()->with('success', 'Student information updattion Failed!');
            }
           
        }catch (\Exception $e) {
            $bug = $e->getMessage();
            dd($bug);
            return redirect()->back()->with('error', $bug);

        }
    }
    
    public function delete($id)
    {
        $student = Student::find($id);
        if($student){
            $mytime = \Carbon\Carbon::now()->format('Y-m-d');
            $student   = Student::where('id',$id)->update(['deleted_at'=>$mytime]);
            $user = User::where('student_id',$id)->where('user_type','Student')->update(['deleted_at'=>$mytime]);

            return redirect('students')->with('success', 'Student removed!');
        }else{
            return redirect('students')->with('error', 'Student not found');
        }
    }
}
