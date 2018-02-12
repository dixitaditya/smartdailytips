<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\mail\TestMail;

class TestMailController extends Controller
{
    //
    public function sendMail(){
        Mail::to('admin@admin2.com')->send(new TestMail);
    }
}
