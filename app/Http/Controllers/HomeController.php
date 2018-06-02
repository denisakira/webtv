<?php

namespace webTV\Http\Controllers;

use Illuminate\Http\Request;

use webTV\Mail\Contato;

use webTV\MembrosAntigos;
use webTV\MembrosAtuais;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
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

    /**Retorna a view modules/membros-atuais
     *
     * @param MembrosAtuais $atuais
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function atuais(MembrosAtuais $atuais)
    {
        $atuais = $atuais->all();

        return view('modules.membros-atuais', compact('atuais'));
    }

    /**Retorna a view modules/membros-antigos
     *
     * @param MembrosAntigos $antigos
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function antigos(MembrosAntigos $antigos)
    {
        $antigos = $antigos->all();

        return view('modules.membros-antigos', compact('antigos'));
    }



}
