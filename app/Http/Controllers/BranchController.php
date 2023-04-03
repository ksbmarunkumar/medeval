<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;

class BranchController extends Controller
{
    public function index()
    {
        $branch = Branch::where('deleted_at',NULL)->get();
        return view('branch.view',["branch"=>$branch]);
    }
    public function create()
    {
        return view('branch.create');
    }
    public function store(Request $request)
    {
        $branch = new Branch;
        $branch->branch_name = $request->branch_name;
        $branch->status = $request->status;

        $branch->save();
        
         if($branch){
                return redirect('branchs')->with('success', 'Branch Create Successfully !');
            }else{
                return redirect('branchs')->with('error', 'Failed to create Branch ! Try again.');
            }
    }
    public function edit($id)
    {
        try
        {
            $branch  = Branch::find($id);
            return view('branch.edit', compact('branch'));

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
            
            $branch  = Branch::find($request->id);
            $branch->branch_name = $request->branch_name;
            $branch->status = $request->status;
            $branch->save(); 
            
            if($branch){
                 return redirect('branchs')->with('success', 'Branch information updated succesfully!');
            }else{
                return redirect()->back()->with('success', 'Branch information updattion Failed!');
            }
            
        }catch (\Exception $e) {
            $bug = $e->getMessage();
            dd($bug);
            return redirect()->back()->with('error', $bug);
        }
    }
    
    public function delete($id)
    {
        $branch = Branch::find($id);
        if($branch){
            $mytime = \Carbon\Carbon::now()->format('Y-m-d');
            $branch   = Branch::where('id',$id)->update(['deleted_at'=>$mytime]);

            return redirect('branchs')->with('success', 'Branch removed!');
        }else{
            return redirect('branchs')->with('error', 'Branch not found');
        }
    }
}
