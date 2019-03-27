<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['edit', 'update']]);
    }

    public function show($username)
    {
        $user = User::where('username','=', $username)->first();
        return view('dashboard.profile.show')->withUser($user);
    }

    public function edit()
    {
        $user = Auth::user();
        return view('dashboard.profile.edit')->withUser($user);
    }

    public function update(Request $request)
    {
        $user = User::find(Auth::id());

        $user->email = request('email');
        $user->website = request('website');
        $user->twitter_handle = request('twitter-handle');
        $user->telegram_handle = request('telegram-handle');
        $user->instagram_handle = request('instagram-handle');
        $user->save();
        return back();
    }
}
