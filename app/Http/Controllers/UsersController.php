<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Mail;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
            'except' => ['show', 'create', 'store', 'index','confirmEmail']
        ]);
        $this->middleware('guest', [
            'only' => ['create']
        ]);
    }
    public function create(){
        return view('users.create');
    }

    public function show(User $user)
    {
        $reviews = $user->reviews()->orderBy('created_at','desc')->paginate(10);
        return view('users.show', compact('user','reviews'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255', #to be unique in table Users
            'password' => 'required|confirmed|min:6'
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),

        ]);
        /** comment as enable email activation accounts */
        // Auth::login($user);
        // session()->flash('success', 'Welcome, You will be loving here:)');
        // return redirect()->route('users.show', [$user]);
        $this->sendEmailConfirmationTo($user);
        session()->flash('success','The verification email has been sent to your address, please check and confirm.');
        return redirect('/');

    }

    public function edit(User $user)
    {
        $this->authorize('update', $user);
        return view('users.edit', compact('user'));
    }
    public function update(User $user, Request $request)
    {
        $this->authorize('update', $user);

        $this->validate($request, [
            'name' => 'required|max:50',
            //'email' => 'required|email|unique:users|max:255', #to be unique in table Users
            'password' => 'nullable|confirmed|min:6'
        ]);
        $data = [];
        $data['name'] =  $request->name;
        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        }
        $user->update($data);
        session()->flash('success', 'Successfully edited your account.');
        return redirect()->route('users.show', $user->id);
    }

    public function index()
    {
        $users = User::paginate(5);
        return view('users.index', compact('users'));
    }

    public function destroy(User $user)
    {
        $this->authorize('destroy', $user);
        $user->delete();
        session()->flash('success','Successfully delete user.');
        return back();
    }

    protected function sendEmailConfirmationTo( $user){
        $view = 'emails.confirm';//specify the view template
        $data = compact('user');
        $from = 'jack@example.com';
        $name = 'Jack';
        $to = $user->email;
        $subject = "Thanks for registration in " . config('app.name') .  ", please confirm your email address.";
        Mail::send($view, $data, function ($message) use ($from, $name, $to, $subject) {
            $message->from($from, $name)->to($to)->subject($subject);
        });
    }

    public function confirmEmail($token)
    {
        $user = User::where('activation_token', $token)->firstOrFail();
        $user->activated = true;
        $user->activation_token = null;
        $user->save();

        Auth::login($user);
        session()->flash('success','Successfully activated.');
        return redirect()->route('users.show',[$user]);
    }

    public function followings(User $user){
        $users = $user->followings()->paginate(30);
        $title = $user->name . " is following:";
        return view('users.show_follow', compact('users','title'));
    }

    public function followers(User $user){
        $users = $user->followers()->paginate(30);
        $title = $user->name . " 's followers:";
        return view('users.show_follow', compact('users','title'));
    }




}
