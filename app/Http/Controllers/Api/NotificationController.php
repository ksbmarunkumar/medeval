<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeacherNotify;

class NotificationController extends Controller
{
    public function get_notify(Request $request)
    {
        $TeacherNotify = TeacherNotify::get();
        return response()->json(["data"=>$TeacherNotify,"status"=>200,"success"=>"true"]);
    }
    
    public function update_notify(Request $request)
    {
        $TeacherNotify = TeacherNotify::where('id',$request->id)->where('user_id',$request->user_id)->update([
                'status' => $request->seen,
            ]);
        if($TeacherNotify){
            return response()->json(["message"=>"Notification seen !","success"=>true,"status"=>200]);
        }else{
            return response()->json(["message"=>"User does not exists  !","success"=>false,"status"=>200]);
        }
    }
}