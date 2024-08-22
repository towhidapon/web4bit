<?php

namespace App\Http\Controllers;

use App\Mail\Contactmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {



        $data = [
          'subject' => $request->subject,
          'name' => $request->name,
          'email' => $request->email,
          'content' => $request->content
        ];

        Mail::to('info@web4bit.com')->send(new Contactmail($data));
        return back()->with('message', 'Message Send');
    }
}
