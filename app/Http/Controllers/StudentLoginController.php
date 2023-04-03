<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\StudentNotify;

class StudentLoginController extends Controller
{
    
    public function StudentLogin(Request $request)
    {
        try
        { 
            return view('front-end.student-login');
           
        }catch (\Exception $e) {
            $bug = $e->getMessage();
            dd($bug);
            return redirect()->back()->with('error', $bug);

        }
        
    }
    public function updateStudentNotify(Request $request){
        // print_r($request->all());
    // return response()->json($request->student_ids);
    
    $profiles = StudentNotify::where('student_id','=',$request->student_ids)->where('status','=','false')->get();
    
    if(count($profiles) > 0){
        foreach($profiles as $profile){
            $profile->status = 'true';
     
            if ($profile->update()) {
              return response()->json(['success' => true, 'message' => 'Update successfully'], 200);
               } else {
            return response()->json(['success' => false, 'message' => 'Update Not successfully'], 419);
                }
        }
    }
      return response()->json(['success' => false, 'message' => 'Update Not successfully'], 419);
    }
    
    public function profile_update(Request $request)
    {
        try
        {
            $user_detl = User::where('business_id',Auth::user()->business_id)->where('user_type','Student')->first();
           
            if($request->hasFile('image')){
                $image = $request->file('image');
                $new_name=rand('000000','111111').'.'.$image->extension();
                $image->move(public_path().'/student_images/',$new_name);
                $student = Student::find($user_detl->business_id);
                $update = $student->update([
                'image' =>$new_name,
                ]);
            }
            
            $user = User::find($user_detl->id);
            $user->name = $request->name;
            $user->email = $request->email;
            if(isset($request->password)){
                $user->password = Hash::make($request->password);
            }
            
            $user->save();
            
            $student = Student::find($user_detl->business_id);
            $student->name = $request->name;
            $student->mobile_no = $request->mobile;
            $student->email = $request->email;
            if(isset($request->password)){
                 $student->password = Hash::make($request->password);
            }           
            $student->save();
            
            if($student){
                return redirect('StudentLogin')->with('success', 'Student information updated succesfully!');
            }else{
                return redirect('StudentLogin')->with('success', 'Failed to Student information !');
            }
            
        }catch (\Exception $e) {
            $bug = $e->getMessage();
            dd($bug);
            return redirect()->back()->with('error', $bug);

        }
        
    }
   
}
