<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class mailController extends Controller
{
    public function send()
    {

        Mail::send(['text'=>'mail'],['name','Leel'],function ($message){
            $message->to('leelk1995@gmail.com','To Leel')->subject('Hunt Registration');
            $message->from('leelkarunarathne@gmail.com','Hunt');
        });
    }
}
