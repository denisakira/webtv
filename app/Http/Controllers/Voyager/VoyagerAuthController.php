<?php

namespace webTV\Http\Controllers\Voyager;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Http\Controllers\VoyagerAuthController as BaseVoyagerAuthController;
use Socialite;

class VoyagerAuthController extends BaseVoyagerAuthController
{
    public function login(){
        return Socialite::driver('google')
            ->with(['hd' => 'faacwebtv.com.br'])
            ->scopes(['openid', 'profile', 'email'])
            ->redirect();
    }

    /**
     * Faz logout do user e redireciona para a página inicial
     * @param Request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout(Request $request){
        //auth()->logout();

        return redirect('/');
    }

}
