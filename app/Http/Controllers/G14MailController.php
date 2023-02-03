<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class G14MailController extends Controller
{
    public function basic_email() {
        $data = array('name'=>"Prakash Choudhary");
   
        Mail::send(['html'=>'mail'], $data, function($message) {
            $message->to('choudharydilip835@gmail.com', 'Dilip Choudhary')->subject
            ('Welcome To G14 Technologies');
            $message->from('gfourteentech@gmail.com','G14 Technologies');
        });
        echo "Basic Email Sent. Check your inbox.";
   }
}
