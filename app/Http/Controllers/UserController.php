<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function subscribe()
    {
        $user = User::where('id',Auth::id())->first();
        if($user->is_subscribed==0) {
            $user->update(['is_subscribed' => 1]);

        }
        else{
            $user->update(['is_subscribed' => 0]);

        }
        return view('dashboard');
    }
}
