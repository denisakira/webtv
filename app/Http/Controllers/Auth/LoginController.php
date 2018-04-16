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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


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

        // $google_client_token = [
        //     'access_token' => $user->token,
        //     'refresh_token' => $user->refreshToken,
        //     'expires_in' => $user->expiresIn
        // ];
    
        // $client = new Google_Client();
        // $client->setApplicationName("Webtv");
        // $client->setAccessToken(json_encode($google_client_token));
    
        // $service = new Google_Service_People($client);    

        $authUser = $this->findOrCreateUser($user);
        
        Auth::login($authUser, true);
        
        return redirect($this->redirectTo);

        // $user->token;
    }

    /**
     * If a user has registered before using social auth, return the user
     * else, create a new user object.
     * @param  $user Socialite user object
     * @param $provider Social auth provider
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
