<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    public function get_faq()
    {
        $faq = Faq::get();
        return  response([
            'success' => true,
            'message' => "FAQ get successfully !",
            'data'=> $faq,
            'status'=>200
           
        ]);
    }
}