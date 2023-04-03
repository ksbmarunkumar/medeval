<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Subject;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{

    public function edit($id, Request  $re)
    {
        $test = Test::find($id);

        $branch = Branch::find($test->branch);
        $subject = Subject::find($test->subject_id);

        $mcq_ids = json_decode($test->mcq_test_id);
        $shortAns_ids = json_decode($test->shortans_test_id);
        $ospAns_ids = json_decode($test->osp_test_id);

        $mcq_test = DB::table("mcq_tests")
            ->join("subjects", function ($join) {
                $join->on("mcq_tests.subject_id", "=", "subjects.id");
            })
            ->select("mcq_tests.id as mcqt_id", "mcq_tests.test_name", "mcq_tests.created_at","mcq_tests.duration" ,  "mcq_tests.marks", "subjects.subject")
            ->whereIn("mcq_tests.id", $mcq_ids)
            ->get();

        $shortAns_test = DB::table("short_que_tests")
            ->join("subjects", function ($join) {
                $join->on("short_que_tests.subject_id", "=", "subjects.id");
            })
            ->select("short_que_tests.id as shortt_id", "short_que_tests.test_name", "short_que_tests.duration" ,"short_que_tests.marks", "short_que_tests.created_at", "subjects.subject")
            ->whereIn("short_que_tests.id", $shortAns_ids)
            ->get();

        $osp_test = DB::table("osp_tests")
            ->join("subjects", function ($join) {
                $join->on("osp_tests.subject_id", "=", "subjects.id");
            })
            ->select("osp_tests.id as ospt_id", "osp_tests.test_name", "osp_tests.duration", "osp_tests.marks", "osp_tests.created_at", "subjects.subject")
            ->whereIn("osp_tests.id", $ospAns_ids)
            ->get();

        // return view('front-end.test_view', ['test' => $test, 'mcq_tests' => $mcq_test, 'short_tests' => $shortAns_test, 'osp_tests' => $osp_test, "branch" => $branch, "subject" => $subject]);

        $branches = Branch::where('deleted_at', NULL)->get();
        $subjects = Subject::where('deleted_at', NULL)->get();

        if ($re->ajax()) {
            return   response()->json([
                'mcq_test' => $mcq_test,
                'shortAns_test' => $shortAns_test,
                'osp_test' => $osp_test
            ]);
        }

        return view(
            'front-end.edit_test',
            [
                'test' => $test, 'mcq_tests' => $mcq_test, 'short_tests' => $shortAns_test,
                'osp_tests' => $osp_test, "branch" => $branch, "subject" => $subject,
                'branches' => $branches, 'subjects' => $subjects
            ]
        );
    }

    function update($id , Request $r){
        // return $r->all();
        // return $r->all();
        $test =   Test::find($id);
        $test->test_name = $r->test_name;
        $test->subject_id = $r->main_subject_id;
        $test->marks = $r->marks;
        $test->duration = $r->duration;
        $test->branch = $r->branch_id;
        $test->date = $r->date;
        $test->osp_test_id = json_encode($r->osp_id);
        $test->shortans_test_id = json_encode($r->short_id);
        $test->mcq_test_id = json_encode($r->mcq_id);
        $test->viva_name = $r->viva_test_name;
        $test->viva_marks = $r->viva_marks;

        if ($test->save()) {
            return redirect()->route('list-test')->with('msg', 'Test Created');
        } else {
            return redirect()->back();
        }
    }
}
