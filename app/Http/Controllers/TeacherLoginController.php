<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\TeacherNotify;
use Illuminate\Support\Facades\Auth;

class TeacherLoginController extends Controller
{
    public function TeacherLogin()
    {
        try
        { 
            return view('front-end.index-teacher-login');
        }catch (\Exception $e) {
            $bug = $e->getMessage();
            dd($bug);
            return redirect()->back()->with('error', $bug);

        }
        
    }
    public function updateteacherNotify(Request $request){
        // print_r($request->all());
    $new_teachers = TeacherNotify::where('user_id','=', Auth::user()->teacher_id)->where('status','=','false')->get();
    
    if(count($new_teachers) > 0){
        foreach($new_teachers as $new_teacher){
            $new_teacher->status = 'true';
     
            if ($new_teacher->update()) {
              return response()->json(['success' => true, 'message' => 'Update successfully'], 200);
               } else {
            return response()->json(['success' => false, 'message' => 'Update Not successfully'], 419);
                }
        }
    }
      return response()->json(['success' => false, 'message' => 'Update Not successfully'], 419);
    }
    
}
