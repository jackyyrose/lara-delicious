<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', [
            'only' => ['create']
        ]);
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials, $request->has('remember'))) {
            if(Auth::user()->activated){
                session()->flash('success', 'Welcome back, how are you today?');
                $fallback = route('users.show', Auth::user());
                return redirect()->intended($fallback);
            }else{
                Auth::logout();
                session()->flash('warning','Your account has not been activated, please check email to activate.');
                return redirect('/');
            }
        } else {
            session()->flash('danger', 'Sorry, your Email and password doesn\'t match!');
            return redirect()->back()->withInput();
        }
    }

    public function destroy()
    {
        Auth::logout();
        session()->flash('success', 'Successfully logged out!');
        return redirect('login');
    }
}
