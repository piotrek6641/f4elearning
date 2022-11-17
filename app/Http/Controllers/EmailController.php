<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MailTest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class EmailController extends Controller
{
    public function index()
    {
        return view('emails.email-form');
    }
    public function store(Request $request)
    {
        $request->validate([
           'title'=>['required','string','max:255'],
            'content'=>['required','string']

        ],
        [
            'title.require'=>'title is required',
            'content.require'=>'content is required'
        ]

        );
        $users = User::where('is_subscribed',1)->get();
        Mail::to($users)->send(new MailTest($request));
        return back()->with('success','email successfully sent');
    }
}
