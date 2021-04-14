<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\User;
use Validator;
use Socialite;
use Exception;
use Auth;

class TwitterController extends Controller
{
    public function redirectToTwitter()
    {
        return Socialite::driver('twitter')->redirect();
    }

    public function twitterCallback()
    {
        try {
    
            $user = Socialite::driver('twitter')->user();
            $twitterId = User::where('twitter_id', $user->id)->first();
     
            if($twitterId){
                Auth::login($twitterId);
                return redirect('/home');
            }else{
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'twitter_id' => $user->id,
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