<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Mail;

class ContactsController extends Controller
{
    public function send(Request $request) {
        $this->validate($request, [
            'name'    => 'required',
            'prenom'  => 'required',
            'email'   => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $data = [
            'name'    => $request->name,
            'prenom'  => $request->prenom,
            'email'   => $request->email,
            'subject' => $request->subject,
            'body'    => $request->message //$message est réservée
        ];

        Mail::send('emails.emailTemplate', $data, function($message) use($data) {
            $message->from($data['email']);
            $message->to('cyrilgouv@gmail.com');
            $message->subject($data['subject']);
        });

        return redirect(route('contact'))->with('success', 'Votre email a bien été envoyer! Nous y répondrons dans les plus bref délais, merci.');
    }
}
