<?php

namespace App\Http\Controllers;

use App\Models\StudentTest;
use Illuminate\Http\Request;

class StudentTestController extends Controller
{
    public function assignTest(Request $re)
    {
        $tId = session('tId');
        
        if(!$tId) {
            return redirect('assign_test');
        }

        if ($re->studIds != null) {
            foreach ($re->studIds as $id) {

                $stuTests = StudentTest::where('student_id', $id)->where('test_id', $tId)->get();

                
                if (!$stuTests->count()) {
                    $stuTest = new StudentTest();
                    $stuTest->student_id = $id;
                    $stuTest->test_id = $tId;
                    $stuTest->password_login = rand(10000,100000);
                    $stuTest->save();
                }
            }
            return response()->json(['success' => true, 'message' => 'Students added successfully'], 200);
        }else{           
            return response()->json(['success' => false, 'message' => 'No Data Recieved'], 419);

        }
    }
}
