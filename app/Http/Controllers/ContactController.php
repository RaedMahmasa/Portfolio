<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __invoke(ContactRequest $requset)
    {
    Mail::to('raed.raed.mahmasa@gmail.com')->send(new ContactMail($requset->name ,$requset->email, $requset->body));
    return redirect()->back();
    }
}
