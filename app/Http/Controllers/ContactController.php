<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function contactUs () {
        return view('contactUs');
    }

    public function sendEmail (Request $request) {

        // $this->validate($request,[
        //     'phone' => 'min:11|numeric',
        // ]);

        $rules = [
            'phone' => 'numeric|min:11',
        ];

        $customMessages = [
            'phone.numeric' => 'Il campo richiede solo caratteri numerici',
            'phone.min' => 'Il campo richiede minimo 11 caratteri'
        ];

        $this->validate($request, $rules, $customMessages);


        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        ];



        Mail::to('fabiioo.m.95@gmail.com')->send(new ContactMail($details));
        return back();
    }

}
