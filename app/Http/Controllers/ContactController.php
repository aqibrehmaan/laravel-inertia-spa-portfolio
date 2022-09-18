<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactedMessage;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(Request $request)
    {
        Mail::to(config('mail.to.address'), config('mail.to.name'))
        ->send(new ContactedMessage($request->email, $request->message));

        return redirect('/');
    }
}
