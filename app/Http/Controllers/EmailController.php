<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MailTest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class EmailController extends Controller
{
    public function store()
    {
        $user = User::where('id',Auth::id())->first();

        // Ship the order...

        Mail::to($user)->send(new MailTest());
    }
}
