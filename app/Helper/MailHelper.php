<?php

namespace App\Helper;
use App\Mail\StudentPasswordMail;
use Illuminate\Support\Facades\Mail;

class MailHelper
{
    static public function mailStudentPassword($data)
    {
        Mail::to($data['stu_email'])->send(new StudentPasswordMail($data));
    }
}
