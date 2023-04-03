<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Validator;

class BannerController extends Controller
{
    public function index()
    {
        $banner = Banner::where('deleted_at',NULL)->get();
        return view('banner.view',["banner"=>$banner]);
    }
    public function create()
    {
        try{
            
            return view('banner.create');
        }catch (\Exception $e) {
                $bug = $e->getMessage();
                return redirect()->back()->with('error', $bug);
            }
    }
    public function store(Request $request)
    {
    //   return $request->all();
        $request->validate([
                'title'=>'required|string',
            ]);
        try
        {
            $banner = new Banner;
            $banner->title = $request->title;
            $banner->status = $request->status;
            $banner->url = $request->url;
            
            if($request->hasFile('image')){
            $image = $request->file('image');
            $new_name=rand('000000','111111').'.'.$image->extension();
            $image->move(public_path().'/banner_images/',$new_name);
            }
            $banner->image = $new_name;
            $banner->save();
            
             if($banner){
                    return redirect('banners')->with('success', 'Banner Create Successfully !');
                }else{
                    return redirect('banners')->with('error', 'Failed to create Banner ! Try again.');
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
            $banner  = Banner::find($id);
            return view('banner.edit', compact('banner'));

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
            
            $banner  = Banner::find($request->id);
            $banner->title = $request->title;
            $banner->url = $request->url;
            $banner->status = $request->status;
            
            if($request->hasFile('image')){
            $image = $request->file('image');
            $new_name=rand('000000','111111').'.'.$image->extension();
            $image->move(public_path().'/banner_images/',$new_name);
            }
            $banner->image = $new_name;
            
            $banner->save(); 
            
            if($banner){
                 return redirect('banners')->with('success', 'Banner information updated succesfully!');
            }else{
                return redirect()->back()->with('success', 'Banner information updattion Failed!');
            }
            
        }catch (\Exception $e) {
            $bug = $e->getMessage();
            dd($bug);
            return redirect()->back()->with('error', $bug);
        }
    }
    
    public function delete($id)
    {
        $banner = Banner::find($id);
        if($banner){
            $mytime = \Carbon\Carbon::now()->format('Y-m-d');
            $banner   = Banner::where('id',$id)->update(['deleted_at'=>$mytime]);

            return redirect('banners')->with('success', 'Banner removed!');
        }else{
            return redirect('banners')->with('error', 'Banner not found');
        }
    }
}
