<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Teacher;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    // use SendsPasswordResetEmails;

    public function login(Request $request)
    {

        $validData = $request->validate([
            'email' => 'required|email|string',
            'password' => 'required|string'
        ]);

        
        $emailExists = User::where('email',$request->email)->count();
        if($emailExists){
            $emailVerified = User::where('email', $request->email)->first();
        }else{
                return response()->json(["message"=>"Email does not Exists !","success"=>false]);
        }

        if (!Auth::attempt($validData)) {
            return response([
                'message' => 'Invalid credentials!',
                'success' => false,
                'status'=>200
            ]);
        }

        $accessToken = Auth::user()->createToken('authToken')->accessToken;
        
        $user = Auth::user()->business_id;
        auth()->user()->update(['fcm_token'=>$request->fcm_token]);
        
        $teacher = Teacher::select('id','name','mobile','email','joinig_date','class_name','gender','DOB','image')->where('id',Auth::user()->business_id)->first();
        return  response([
            'success' => true,
            'message' => "login successfully !",
            'data'=> $teacher,
            'fcm_token' => Auth::user()->fcm_token,
            'access_token' => $accessToken,
            'status'=>200
        ]);
    }
    
    public function get_profile(Request $request)
    {
        // $user = Auth::user()->business_id;
       return $teacher = Teacher::select('id','name','mobile','email','joinig_date','class_name','image')->where('id',$request->id)->first();
        return  response([
            'success' => true,
            'message' => "Profile get successfully !",
            'data'=> $teacher,
            'status'=>200
        ]);

    }
    
    public function profile_picture_update(Request $request)
    {
        $requests=$request->all();
        if($request->hasFile('image')){
           $image = $request->file('image');
           $new_name=rand('000000','111111').'.'.$image->extension();
            $image->move(public_path().'/teacher_images/',$new_name);
          $path= URL('/teacher_images/').'/'.$new_name;
        //   $data = auth()->user()->business_id;
           $teacher_id = Teacher::find($request->id);
           $update = $teacher_id->update([
                   'image' =>$new_name
           ]);
                return response()->json(['message'=>"profile updated successfully",'success'=>true,'data'=>$path]);
        }else{
                return response()->json(['message'=>"Image Not Found !", 'success'=>false, 'data'=> null]);
        }
    }
    
    public function profile_edit(Request $request)
    {
        // return $data = $request->all();

        $teacher = Teacher::find($request->id);
        if ($teacher) {
           $update = $teacher->update($request->all());
        }
      
        $user_id = User::where('business_id',$request->id)->where('user_type','Teacher')->first();
        $user = User::find($user_id->id);
        $user->name = $request->name;
        $user->save();
              
        return response()->json(["data"=>$teacher,'status'=>200,'success'=>true,"message"=>"Profile Updated Successfully !"]);
    }
    
    public function forgotPassword(Request $request)
    {
         $this->validate($request,[
            'email'=>'required',
        ]);
        $userdata= User::where('email','=',$request->email)->first();
        if($userdata)
        {
            $email=$userdata->email;
            $otp = rand(1000,9999);
            try {
                $email_data =array(
                    'name'  => $userdata->name,
                    'otp' =>  $otp,
                );
                Mail::send('forgot-password-email', $email_data, function ($message) use ($email) {
                    $message->to($email)
                        ->subject('Reset Your Password');
                });

                $user = User::find($userdata->id);
                $update = $user->update([
                    'email' => $request->email,
                    'otp' => $otp,
                    ]);

                if (Mail::failures()) {
                        return response()->json(['success'=> false,'message'=>'mail sending failed, check log for more details']);
                }
                    return response()->json(["data"=>$otp,'success'=>true,'message'=>'Email has sent to your email:'." ".$email]);

            }catch (Exception $e){
                return response()->json(['error'=>$e->getMessage()]);
            }
        }
        else{
                return response()->json(['success'=> false,'message'=>'Mail sending failed, Confirm your Email']);
        }

    }

    public function resetPassword(Request $request)
    {
        $data = $request->all();
        $verify=User::where('email','=',$request->email)->where('otp','=',$request->otp)->exists();
        if($verify==true){
            $change=User::where('email','=',$request->email)->update(['password'=>Hash::make($request->password)]);
                return response()->json(["message"=>"Your Password has been changed successfully !","success"=>true,"status"=>200]);
        }else{
            return response()->json(["message"=>"Invalid otp !","success"=>false]);
        }
    }
}