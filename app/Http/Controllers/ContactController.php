<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        $email = $request->email;
        $me = 'aryumsf@gmail.com';
        $name = $request->firstName . ' ' . $request->lastName;
        $data = array(
            'name' => $request->firstName . ' ' . $request->lastName,
            'email' => $request->email,
            'messages' => $request->message
        );
        // dump($data);
        Mail::send('message_template', $data, function ($mail) use ($me, $email, $data) {
            $mail->to($me, 'Aryum N. Erliandi')->subject("Portfolio Contact");
            $mail->from($email, $data['name']);
        });

        if (mail::failures()) {
            return view('success', [
                "name" => $name,
                "message_text" => "Your message failed to send."
            ]);
        } else {
            return view('success', [
                "name" => $name,
                "message_text" => "Your message has been sent."
            ]);
        }
    }
}
