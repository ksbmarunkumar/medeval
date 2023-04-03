<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        $department = Department::where('deleted_at',NULL)->get();
        return view('department.view',["department"=>$department]);
    }
    public function create()
    {
        try
        { 
            return view('department.create');

        }catch (\Exception $e) {
            $bug = $e->getMessage();
            dd($bug);
            return redirect()->back()->with('error', $bug);

        }
    }
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'department_name' => 'required|string',
            ]);
        try
        {        
            $department = new Department;
            $department->department_name = $request->department_name;
            $department->save();

          
            if($department){
                return redirect('departments')->with('success', 'Department Create Successfully !');
            }else{
                return redirect('departments')->with('error', 'Failed to create Department ! Try again.');
            }
        
        }catch (\Exception $e) {
            $bug = $e->getMessage();
            dd($bug);
            return redirect()->back()->with('error', $bug);
        }
    }
    public function edit($id)
    {
        try
        {
            $department  = Department::find($id);
            return view('department.edit', compact('department'));

        }catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', $bug);
        }
    }
    public function update(Request $request)
    {
        

        // update user info
         $request->validate([
            'id'       => 'required',
            'department_name' => 'required|string',
        ]);

      
        try{
          
            $department = Department::find($request->id);
            
             $data = [
                'department_name' => $request->department_name,
                ];
            $data = $department->update($data);    
            if($department){
                 return redirect('departments')->with('success', 'Department information updated succesfully!');
            }else{
                return redirect()->back()->with('success', 'Department information updattion Failed!');
            }
           
        }catch (\Exception $e) {
            $bug = $e->getMessage();
            dd($bug);
            return redirect()->back()->with('error', $bug);

        }
    }
   
   public function delete($id)
    {
        $department = Department::find($id);
        if($department){
            $mytime = \Carbon\Carbon::now()->format('Y-m-d');
            $department   = Department::where('id',$id)->update(['deleted_at'=>$mytime]);
            return redirect('departments')->with('success', 'Faq removed!');
        }else{
            return redirect('departments')->with('error', 'Faq not found');
        }
    }
}
