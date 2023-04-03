<?php

namespace App\Http\Controllers;

use App\Models\McqTest;
use App\Models\OspTest;
use App\Models\ShortQueTest;
use Illuminate\Http\Request;
use Symfony\Component\Console\Output\ConsoleOutput;

class FilterQuestionController extends Controller
{
    //
    public function getAllMcq(Request $r)
    {

        $mcqTest = McqTest::where('test_name', $r->mcq_setName)->orWhere('subject_id', $r->subject_id)->get();

        if ($mcqTest->count()) {
            return response()->json(["data" => $mcqTest], 200);
        } else {
            return response()->json(["data" => 'data not found'], 404);
        }
    }
    public function getAllShortAnswer(Request $r)
    {
         
       
        $shortTest = ShortQueTest::where('test_name', $r->short_setName)->orWhere('subject_id', $r->subject_id)->get();
        

        if ($shortTest->count()) {
            return response()->json(["data" => $shortTest], 200);
        } else {
            return response()->json(["data" => 'data not found'], 404);
            // return response()->json(["data" => $r->all()], 200);
        
        }
    }
    public function getAllOspList(Request $r)
    {

        $ospTest = OspTest::where('test_name', $r->osp_setName)->orWhere('subject_id', $r->osp_subjectId)->get();

        if ($ospTest->count()) {
            return response()->json(["data" => $ospTest], 200);
        } else {
            return response()->json(["data" => 'data not found'], 404);
        }
    }
}
