<?php

namespace App\Http\Controllers;
use App\Services\SocialFacebookAccountService;
use Illuminate\Http\Request;
use Socialite;


class LoginController extends Controller
{
    
  /**
   * Create a redirect method to facebook api.
   *
   * @return void
   */
    public function redirect()
    {
        
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Return a callback method from facebook api.
     *
     * @return callback URL from facebook
     */
    public function callback(SocialFacebookAccountService $service)
    {

        dd($service->createOrGetUser(Socialite::driver('facebook')->user()));
       
    }
}