<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;
use App\mail\mailing;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    function index()
    {
        return view('contact');
    }

    function send(Request $req)
    {
        $req-> validate([

            'name' => 'required',
            'email' => 'required',
            'message' => 'required'

        ]);

        $contact = new contact;
        $contact->name = request('name');
        $contact->email = request('email');
        $contact->message = request('message');
        $contact->save();


        $name = $req->name;
        $email = $req->email;
        $message = $req->message;


        $data = [

            'name' => $name,
            'email' => $email,
            'message' => $message
        ];


        Mail::to('damanibeckford17@gmail.com')->send(new mailing($data));

        return view('contact');
    }
}
