<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Mail\Mailable;
use Mail;

class ContactsController extends Controller
{
    public function send(ContactFormRequest $request) {

        $data = [
            'name'    => $request->name,
            'prenom'  => $request->prenom,
            'email'   => $request->email,
            'subject' => $request->subject,
            'body'    => $request->message //$message est réservée
        ];

        Mail::send('emails.emailTemplate', $data, function($message) use($data) {
            $message->from($data['email']);
            $message->to(config('mail-admin.email'));
            $message->subject($data['subject']);
        });

        return redirect(route('contact'))->with('success', 'Votre email a bien été envoyer! Nous y répondrons dans les plus bref délais, merci.');
    }
}
