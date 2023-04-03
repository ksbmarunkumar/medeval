<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    public function get_banner()
    {
        $banner = Banner::get();
        return  response([
            'success' => true,
            'message' => "Banner get successfully !",
            'data'=> $banner,
            'status'=>200
           
        ]);
    }
}