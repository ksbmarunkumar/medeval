<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Teacher;
use App\Models\User;
use Exception;
use Mockery\Undefined;
use Illuminate\Support\Facades\Storage;



class TeacherController extends Controller
{
    public function index()
    {
        $teacher = Teacher::where('deleted_at', NULL)->get();
        return view('teacher.view', ["teacher" => $teacher]);
    }
    public function create()
    {
        try {
            return view('teacher.create');
        } catch (\Exception $e) {
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
            'email' => 'required|email|unique:teachers',
            'password' => 'required|string|min:8',
            'qualification' => 'required|string',
            'Status_teacher_id' => 'required|string',
        ]);
        try {
            // dd($request->all());
            $teacher = new Teacher;
            $teacher->name = $request->name;
            $teacher->mobile = $request->mobile;
            $teacher->email = $request->email;
            $teacher->password = Hash::make($request->password);
            $teacher->joinig_date = $request->joinig_date;
            $teacher->DOB = $request->dob;
            $teacher->gender = $request->gender;
            $teacher->qualification = $request->qualification;
            $teacher->subject_id = json_encode($request->subject_id);
            $teacher->class_name = json_encode($request->class_name);
            $teacher->department_id = $request->department_id;
            if($request->hasFile('image')){
                $image = $request->file('image');
                $filename = Storage::disk('public_uploads')->put('teacher_images', $request->file('image'));
            }else{
                $filename = "";
            }
            $teacher->image = $filename;
            $teacher->save();

            $user = new User;
            $user->name = $teacher->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->user_type = 'Teacher';
            $user->teacher_id = $teacher->id;
            $user->image = $teacher->image;
            $user->status_id = $request->Status_teacher_id;
            $user->save();

            if ($teacher) {
                return redirect('teachers')->with('success', 'Teacher Create Successfully !');
            } else {
                return redirect('teachers')->with('error', 'Failed to create Teacher ! Try again.');
            }
        } catch (\Exception $e) {
            $bug = $e->getMessage();
            dd($bug);
            return redirect()->back()->with('error', $bug);
        }
    }

    public function edit($id)
    {
        try {
            $teacher  = Teacher::find($id);
            $User  = User::where('teacher_id',$id)->get()->first();
            return view('teacher.edit', compact('teacher' , 'User'));
        } catch (\Exception $e) {
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
        // if (isset($request->password)) {
        //     $validator = Validator::make($request->all(), [
        //         'password' => 'required|string|min:8|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
        //     ]);
        // }

        // dd($request->all());
        try {
            $user = User::where('teacher_id', $request->id)->where('user_type', 'Teacher')->first();
            if($request->hasFile('image')){
                $image = $request->file('image');
                $filename = Storage::disk('public_uploads')->put('teacher_images', $request->file('image'));
            }else{
                $filename = $request->image_old;
            }
           

            $update =  [
                'name' => $request->name,
                'email' => $request->email,
                'status_id' => $request->status_t,
                'image' => $filename
            ];
            // dd( $request->id);
            // dd($update);

            $update = $user->update($update);

            $teacher = Teacher::find($request->id);

            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'joinig' => $request->joinig_date,
                'DOB' => $request->dob,
                'gender' => $request->gender,
                'class_name' => json_encode($request->class_name),
                'qualification' => $request->qualification,
                'subject_id' => json_encode($request->subject_id),
                'image' => $filename
            ];

            $data = $teacher->update($data);
        

            if ($teacher) {
                return redirect('teachers')->with('success', 'Teacher information updated succesfully!');
            } else {
                return redirect()->back()->with('success', 'Teacher information updattion Failed!');
            }
        } catch (\Exception $e) {
            $bug = $e->getMessage();
            dd($bug);
            return redirect()->back()->with('error', $bug);
        }
    }

    public function delete($id)
    {
        $teacher = Teacher::find($id);
        if ($teacher) {
            $mytime = \Carbon\Carbon::now()->format('Y-m-d');
            $teacher   = Teacher::where('id', $id)->update(['deleted_at' => $mytime]);
            $user = User::where('teacher_id', $id)->where('user_type', 'Teacher')->update(['deleted_at' => $mytime]);

            return redirect('teachers')->with('success', 'Teacher removed!');
        } else {
            return redirect('teachers')->with('error', 'Teacher not found');
        }
    }

    public function getAllTeachers(Request $r)
    {   
        // return $r->term['term'] ;
        $t = null;
        
        try{
            $t = Teacher::where('name', 'like', '%' .  $r->term['term'] . '%')->get();

        }catch(Exception $e){
            $t = Teacher::where('id', '!=' , Auth::user()->teacher_id)->get();
        }
        if ($r->ajax()) {
            return response()->json($t);
        }
    }
}
