<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Semester;

class SemesterController extends Controller
{
     public function index()
    {
        $semester = Semester::where('deleted_at',NULL)->get();
        return view('semester.view',["semester"=>$semester]);
    }
    public function create()
    {
        return view('semester.create');
    }
    public function store(Request $request)
    {
        $semester = new Semester;
        $semester->semester_name = $request->semester_name;
        $semester->save();
        
         if($semester){
                return redirect('semesters')->with('success', 'Semester Create Successfully !');
            }else{
                return redirect('semesters')->with('error', 'Failed to create Semester ! Try again.');
            }
    }
    public function edit($id)
    {
        try
        {
            $semester  = Semester::find($id);
            return view('semester.edit', compact('semester'));

        }catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', $bug);
        }
    }
    public function update(Request $request)
    {
         $request->validate([
            'id'       => 'required',
        ]);
        
        try{
            
            $semester  = Semester::find($request->id);
            $semester->semester_name = $request->semester_name;
            $semester->save(); 
            
            if($semester){
                 return redirect('semesters')->with('success', 'Semester information updated succesfully!');
            }else{
                return redirect()->back()->with('success', 'Semester information updattion Failed!');
            }
        }catch (\Exception $e) {
            $bug = $e->getMessage();
            dd($bug);
            return redirect()->back()->with('error', $bug);
        }
    }
    
    public function delete($id)
    {
        $semester = Semester::find($id);
        if($semester){
            $mytime = \Carbon\Carbon::now()->format('Y-m-d');
            $semester   = Semester::where('id',$id)->update(['deleted_at'=>$mytime]);

            return redirect('semesters')->with('success', 'Semester removed!');
        }else{
            return redirect('semesters')->with('error', 'Semester not found');
        }
    }
}
