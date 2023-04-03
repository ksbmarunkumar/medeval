<?php

namespace App\Http\Controllers;

use App\Mail\StudentPasswordMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestMailController extends Controller
{
    public function send()
    {
        $mailData = [
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp.'
        ];
         
        Mail::to('your_email@gmail.com')->send(new StudentPasswordMail($mailData));
           
        dd("Email is sent successfully.");
    }
}
