<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')
            ->redirect();

    }

    public function callback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            $user = User::where('email', $googleUser->email)->first();
            if ($user) {
                auth()->loginUsingId($user->id);

            } else {
                $newUser = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'password' => bcrypt(\Str::random(15))
                ]);
                auth()->loginUsingId($newUser->id);
            }
            return redirect('/dashboard/Apping');
        }catch (\Exception $e){
            return 'لینک مشکل دارد';
        }
    }
}
