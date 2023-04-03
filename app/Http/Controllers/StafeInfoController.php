<?php

namespace App\Http\Controllers;
use App\Models\Test;

use Illuminate\Http\Request;

class StafeInfoController extends Controller
{
    public function index(){

        $Tests = Test::all();
        $total_test = 0;
        $total_active = 0;
        $total_finish = 0;
        $total_future = 0;
        foreach($Tests as $Test){
            $total_test++ ;
           if($Test->status == 'active'){
            $total_active++ ;
           }
           if($Test->status == 'finished'){
            $total_finish++ ;
           }
           if(strtotime(date("y-m-d\Th:i")) < strtotime($Test->date)){
            $total_future++ ;
           }
        }
       return view('admin_view_reports.view_card' , [ "Tests" => $Tests ,"total_test" => $total_test,"total_active" => $total_active,"total_finish" => $total_finish,"total_future" => $total_future]);
    }
}
