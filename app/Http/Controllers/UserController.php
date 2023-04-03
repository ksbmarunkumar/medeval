<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\Exports\UsersExport;

use App\Imports\TeachersImport;
use App\Exports\TeachersExport;

use App\Models\User;

class UserController extends Controller
{
    public function admin_edit()
    {
        $user= Auth::user();
        return view('profile-edit',["user"=>$user]);
    }
    
    public function profile_update(Request $request)
    {
        if(isset($request->password)){
            $validator = $request->validate([
                'password' => 'required|string|min:8|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
            ]);
        }
        try{

            $user_update = User::where('id',Auth::user()->id)->where('user_type','SuperAdmin')->first();
            $user_id = User::find($user_update->id);
            if($request->hasFile('image')){
            $image = $request->file('image');
                    $new_name=rand('000000','111111').'.'.$image->extension();
                    $image->move(public_path().'/admin_images/',$new_name);
                    $user = User::find($request->id);
                    $update = $user->update([
                    'image' =>$new_name,
            ]);
        }

            $update =  [
                'name' => $request->name,
                'email' => $request->email,
            ];
            
            if(isset($request->password)){
                $update['password'] =Hash::make($request->password);
            }

            $update = $user_id->update($update);
             if($update){
                 return redirect('home')->with('success', 'User information updated succesfully!');
            }else{
                return redirect()->back()->with('success', 'User information updattion Failed!');
            }
            
        }catch (\Exception $e) {
            $bug = $e->getMessage();
            dd($bug);
            return redirect()->back()->with('error', $bug);

        }
        
    }
    
    public function fileImportExport()
    {
       return view('file-import');
    }

    public function fileImport(Request $request) 
    {
        Excel::import(new UsersImport, $request->file('file')->store('temp'));
        return back();
    }
   
    public function fileExport() 
    {
        return Excel::download(new UsersExport, 'students-collection.xlsx');
    }    
    
    //Teacher 
    
    public function TeacherImportExport()
    {
       return view('teacher-import');
    }

    public function TeacherImport(Request $request) 
    {
        Excel::import(new TeachersImport, $request->file('file')->store('temp'));
        return back();
    }
   
    public function TeacherExport() 
    {
        return Excel::download(new TeachersExport, 'teachers-collection.xlsx');
    } 
}
