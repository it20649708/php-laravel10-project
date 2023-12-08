<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

class MyController extends Controller
{
   public function index()
   {
    $mailData=[
        'title' =>'Mail from Coding Xpress',
        'body' =>'This is test mail from laravel 10 application by Coding Xpress'
    ];

    Mail::to('naduni@creatit.com.au')->send(new WelcomeMail($mailData));

    dd('Mail Send Successfully');
   }
}
