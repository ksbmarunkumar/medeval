<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;


class FaqController extends Controller
{
     public function index()
    {
        $faq = Faq::where('deleted_at',NULL)->get();
        return view('faq.view',["faq"=>$faq]);
    }
    public function create()
    {
        try{
            return view('faq.create');
        }catch (\Exception $e) {
                $bug = $e->getMessage();
                return redirect()->back()->with('error', $bug);
            }
    }
    
    public function store(Request $request)
    {
        $request->validate([
                'question'=>'required|string',
                'answer'=> 'required|string',
            ]);
        try{
            
            $faq = new Faq;
            $faq->question = $request->question;
            $faq->answer = $request->answer;
            $faq->save();
            
            if($faq){
                return redirect('faqs')->with('success', 'Faq Create Successfully !');
            }else{
                return redirect('faqs')->with('error', 'Failed to create Faq ! Try again.');
            }
            
        }catch (\Exception $e) {
                $bug = $e->getMessage();
                return redirect()->back()->with('error', $bug);
            }
    }
    
    public function edit($id)
    {
        try
        {
            $faq  = Faq::find($id);
            return view('faq.edit', compact('faq'));

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
            'question' => 'required',
        ]);

      
        try{
          
            $faq = Faq::find($request->id);
            
             $data = [
                'question' => $request->question,
                'answer' => $request->answer,
                ];
            $data = $faq->update($data);    
            if($faq){
                 return redirect('faqs')->with('success', 'Faq information updated succesfully!');
            }else{
                return redirect()->back()->with('success', 'Faq information updattion Failed!');
            }
           
        }catch (\Exception $e) {
            $bug = $e->getMessage();
            dd($bug);
            return redirect()->back()->with('error', $bug);

        }
    }
    
    public function delete($id)
    {
        $faq = Faq::find($id);
        if($faq){
            $mytime = \Carbon\Carbon::now()->format('Y-m-d');
            $faq   = Faq::where('id',$id)->update(['deleted_at'=>$mytime]);

            return redirect('faqs')->with('success', 'Faq removed!');
        }else{
            return redirect('faqs')->with('error', 'Faq not found');
        }
    }
}
