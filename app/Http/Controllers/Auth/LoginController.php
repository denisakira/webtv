<?php

namespace webTV\Http\Controllers\Auth;

use webTV\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\Auth;

use webTV\User as User;

use Socialite;
use Google_Client;
use Google_Service_People;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Redireciona para o provedor -> google
     *
     * @return Socialite driver
     */
    public function redirectToProvider()
    {
        return Socialite::driver('google')
            ->with(['hd' => 'faacwebtv.com.br'])
            ->scopes(['openid', 'profile', 'email'])
            ->redirect();
    }

    /**
     * Obtain the user information from google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->user();

        $authUser = $this->findOrCreateUser($user);
        
        Auth::login($authUser, true);
        
        return redirect($this->redirectTo);
    }

    /**
     * If a user has registered before using social auth, return the user
     * else, create a new user object.
     *
     * @param  $user Socialite user object
     * @return  User
     */
    public function findOrCreateUser($user)
    {
        $authUser = User::where('provider_id', $user->getId())->first();

        if ($authUser) {
            return $authUser;
        }
        
        return User::create([
            'name'     => $user->getName(),
            'email'    => $user->getEmail(),
            'provider_id' => $user->getId(),
        ]);
    }

}
