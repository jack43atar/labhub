<?php

namespace App\Http\Controllers;


use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class GoogleLoginController extends Controller
{
    public function redirectToGoogle(): RedirectResponse
    {
        $parameters = ['access_type' => 'offline'];
        return Socialite::driver('google')->stateless()->with($parameters)->redirect();
    }

    public function handleGoogleCallback(): RedirectResponse
    {
        // die("ok");
        // Socialite::driver($provider)->stateless();
        $user = Socialite::driver('google')->stateless()->with(['access_type' => 'offline'])->user();
        
        $existingUser = User::where('email', $user->email)->first();

        if ($existingUser) {
            // if (Auth::attempt([
            //     'type'      => 3,
            //     'email'     => $user->email,
            //     'google_id'  => $user->id,
            // ])){
            //     return redirect()->route('home');
            // }
            $ss=auth()->login($existingUser, true);
            print_r($ss);die();
            return redirect()->route('home');
        } else {
            // Create a new user.

            $newUser = User::create([
                'name'      =>$user->name,
                'email'     => $user->email,
                'password'  => bcrypt(request(Str::random())),
                'type'      => 3,
                'google_id' => $user->id
            ]);

            // if (Auth::attempt([
            //     'type'      => 3,
            //     'email'     => $user->email,
            //     'google_id'  => $user->id,
            // ])){
            //     return redirect()->route('home');
            // }
            auth()->login($newUser, true);
            return redirect()->route('home');
        }

         // Redirect to url as requested by user, if empty use /dashboard page as generated by Jetstream
    }
}