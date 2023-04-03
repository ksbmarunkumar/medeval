<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;
use App\Models\Batch;

class BatchController extends Controller
{
    public function index()
    {
        $batch = Batch::where('deleted_at',NULL)->get();
        return view('batch.view',["batch"=>$batch]);
    }
    public function create()
    {
        $branch = Branch::where('deleted_at',NULL)->get();
        return view('batch.create',["branch"=>$branch]);
    }
    public function store(Request $request)
    {
        $batch = new Batch;
        $batch->batch_name = $request->batch_name;
        $batch->department_id = $request->department_id;
        $batch->save();
        
         if($batch){
                return redirect('batches')->with('success', 'Branch Create Successfully !');
            }else{
                return redirect('batches')->with('error', 'Failed to create Branch ! Try again.');
            }
    }
    public function edit($id)
    {
        try
        {
            $batch  = Batch::find($id);
            $branch = Branch::where('deleted_at',NULL)->get();
            return view('batch.edit', compact('batch','branch'));

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
            $batch  = Batch::find($request->id);
            $batch->batch_name = $request->batch_name;
            $batch->department_id = $request->department_id;
            $batch->save(); 
            
            if($batch){
                 return redirect('batches')->with('success', 'Batch information updated succesfully!');
            }else{
                return redirect()->back()->with('success', 'Batch information updattion Failed!');
            }
            
        }catch (\Exception $e) {
            $bug = $e->getMessage();
            dd($bug);
            return redirect()->back()->with('error', $bug);
        }
    }
    
    public function delete($id)
    {
        $batch = Batch::find($id);
        if($batch){
            $mytime = \Carbon\Carbon::now()->format('Y-m-d');
            $batch   = Batch::where('id',$id)->update(['deleted_at'=>$mytime]);

            return redirect('batches')->with('success', 'Batch removed!');
        }else{
            return redirect('batches')->with('error', 'Batch not found');
        }
    }
}
