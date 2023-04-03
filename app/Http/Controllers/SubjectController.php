<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
         public function index()
    {
        $subject = Subject::where('deleted_at',NULL)->get();
        return view('subject.view',["subject"=>$subject]);
    }
    public function create()
    {
        return view('subject.create');
    }
    public function store(Request $request)
    {
        $subject = new Subject;
        $subject->subject = $request->subject;
        $subject->status = $request->status;
        $subject->save();
        
         if($subject){
                return redirect('subjects')->with('success', 'Subject Create Successfully !');
            }else{
                return redirect('subjects')->with('error', 'Failed to create Subject ! Try again.');
            }
    }
    public function edit($id)
    {
        try
        {
            $subject  = Subject::find($id);
            return view('subject.edit', compact('subject'));

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
            
            $subject  = Subject::find($request->id);
            $subject->subject = $request->subject;
            $subject->status = $request->status;
            $subject->save(); 
            
            if($subject){
                 return redirect('subjects')->with('success', 'Subject information updated succesfully!');
            }else{
                return redirect()->back()->with('success', 'Subject information updattion Failed!');
            }
        }catch (\Exception $e) {
            $bug = $e->getMessage();
            dd($bug);
            return redirect()->back()->with('error', $bug);
        }
    }
    
    public function delete($id)
    {
        $subject = Subject::find($id);
        if($subject){
            $mytime = \Carbon\Carbon::now()->format('Y-m-d');
            $subject   = Subject::where('id',$id)->update(['deleted_at'=>$mytime]);

            return redirect('subjects')->with('success', 'Subject removed!');
        }else{
            return redirect('subjects')->with('error', 'Subject not found');
        }
    }
}
