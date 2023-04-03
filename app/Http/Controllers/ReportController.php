<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        return view('report.view');
    }
    public function create()
    {
        return view('report.create');
    }
    public function store()
    {
        // return view('report.view');
    }
}
