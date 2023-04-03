<?php

namespace App\Helper;

use App\Models\Branch;
use App\Models\Subject;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestHelper
{
    static function testBriefDetails()
    {
        $result =  DB::table('tests')
            ->select('tests.id', 'tests.test_name', 'tests.teacher_id', 'tests.marks', 'tests.duration', 'tests.date', 'subjects.subject', 'branches.branch_name')
            ->join('branches', 'tests.branch', '=', 'branches.id')
            ->join('subjects', 'tests.subject_id', '=', 'subjects.id')
            ->get();
        return $result;
    }

    static function testFullDetails($id)
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
            ->select("mcq_tests.id as mcqt_id", "mcq_tests.test_name", "mcq_tests.created_at", "mcq_tests.marks", "subjects.subject")
            ->whereIn("mcq_tests.id", $mcq_ids)
            ->get();

        $shortAns_test = DB::table("short_que_tests")
            ->join("subjects", function ($join) {
                $join->on("short_que_tests.subject_id", "=", "subjects.id");
            })
            ->select("short_que_tests.id as short_id", "short_que_tests.test_name", "short_que_tests.marks", "short_que_tests.created_at", "subjects.subject")
            ->whereIn("short_que_tests.id", $shortAns_ids)
            ->get();

        $osp_test = DB::table("osp_tests")
            ->join("subjects", function ($join) {
                $join->on("osp_tests.subject_id", "=", "subjects.id");
            })
            ->select("osp_tests.id as ospt_id", "osp_tests.test_name",  "osp_tests.marks", "osp_tests.created_at", "subjects.subject")
            ->whereIn("osp_tests.id", $ospAns_ids)
            ->get();

        return [$test, $mcq_test, $shortAns_test, $osp_test, $branch, $subject];
    }
}
