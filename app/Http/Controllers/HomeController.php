<?php

namespace webTV\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('modules.home');
    }

    public function sistema()
    {
        return view('modules.sistema');
    }

    /**
     * Retorna a view Contato
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contato()
    {
        return view('modules.contato');
    }

    /**
     * Retorna a view Sobre
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function sobre()
    {
        return view('modules.sobre');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout(){
        auth()->logout();

        return redirect('home');

    }
}
