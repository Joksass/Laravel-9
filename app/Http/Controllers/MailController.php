<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function plain_email() {
        $data = array('name'=>"Gerb. xxx");

        Mail::send(['text'=>'mail.mail'], $data, function($message) {
           $message->to('01eagle09@gmail.com', 'Arnas Jokšas')->subject
              ('Testas iš Laravel');
           $message->from('aj.laraveltest@gmail.com','Laravel Testing');
        });
        echo "Išsiųstas laiškas";
    }
    public function html_email() {
        $data = array('name'=>"Gerb. xxx");
        Mail::send('mail.mail', $data, function($message) {
            $message->to('01eagle09@gmail.com', 'Arnas Jokšas')->subject
            ('Testas iš Laravel');
        $message->from('aj.laraveltest@gmail.com','Laravel Testing');
        });
        echo "HTML Išsiųstas laiškas";
    }    
}
