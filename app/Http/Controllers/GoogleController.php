<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\User;
use Validator;
use Socialite;
use Exception;
use Auth;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback()
    {
        try {
    
            $user = Socialite::driver('google')->user();
            $googleId = User::where('google_id', $user->id)->first();
     
            if($googleId){
                Auth::login($googleId);
                return redirect('/home');
            }else{
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => ''
                ]);
    
                Auth::login($createUser);
                return redirect('/home');
            }
    
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }
}