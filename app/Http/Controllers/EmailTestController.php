<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Mail\NewUserWelcomeMail;
use Illuminate\Support\Facades\Mail;
class EmailTestController extends Controller
{
    public  function  index(){
        $email = array('meyfemi14@yahoo.com');

        Mail::to($email)->send(new NewUserWelcomeMail());

        return  "<b>Mail sent</b>";
    }
}
