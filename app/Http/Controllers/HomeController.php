<?php

namespace webTV\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use webTV\Mail\Contato;

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


    /**
     * Retorna a view modules/sistema
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function sistema()
    {
        return view('modules.sistema');
    }

    /**
     * Retorna a view modules/contato
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contato()
    {
        return view('modules.contato');
    }

    /**
     * Retorna a view modules/sobre
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function sobre()
    {
        return view('modules.sobre');
    }

    /**
     * Retorna a view modules/solicite
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function solicite()
    {
        return view('modules.solicite');
    }

    public function mailContato()
    {
        $user = $this->validate(request(), [
            'nome' => 'required',
            'email' => 'required|email',
            'assunto' => 'required',
            'mensagem' => 'required',
        ]);

        Mail::to('contato@faacwebtv.com')->send(new Contato($user));

        return redirect('home');

    }


    /**
     * Faz logout do user e redireciona para a página inicial
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout(){
        auth()->logout();

        return redirect('home');

    }
}
