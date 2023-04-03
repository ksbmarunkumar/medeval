<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentTaskController extends Controller
{
    public function index()
    {
        return view('student.task');
    }
}
