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
        return to_route('settings');
    }
    public function Search(Request $request)
    {
        if($request->option =="id")
        {
            $users = User::where('id', $request->text)->paginate(10);
            return view('users.index')->with('users',$users);
        }
        if($request->option == "name") {
            $users = User::where('name', 'LIKE', $request->text . '%')->paginate(10);
            return view('users.index')->with('users',$users);
        }
        if($request->option=="email")
        {
            $users = User::where('email', 'LIKE', $request->email . '%')->paginate(10);
            return view('users.index')->with('users',$users);
        }
        else
        {
            return back();
        }

    }
    public function Filter(Request $request)
    {
        if($request->option =="id")
        {
            $users = User::orderBy('id')->paginate(10);
            return view('users.index')->with('users',$users);
        }
        if($request->option == "name") {
            $users = User::orderBy('name')->paginate(10);
            return view('users.index')->with('users',$users);
        }
        if($request->option=="email")
        {
            $users = User::orderBy('email')->paginate(10);
            return view('users.index')->with('users',$users);
        }
        if($request->option=="updated_at")
        {
            $users = User::orderBy('updated_at', 'desc')->paginate(10);
            return view('users.index')->with('users',$users);
        }
        else
        {
            return back();
        }

    }
    public function ban($id)
    {
        $user = User::where('id', $id)->first();
        if ($user->isbaned == 0) {
            $user->update([
                'isbaned' => 1
            ]);
            return back();
        }
    }
}
