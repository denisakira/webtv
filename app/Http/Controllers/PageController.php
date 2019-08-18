<?php

namespace webTV\Http\Controllers;

use Illuminate\Http\Request;

use webTV\Mail\Contato;

use webTV\MembrosAntigos;
use webTV\MembrosAtuais;
use webTV\Models\Page;

class PageController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('modules.home');
    }

    public function show($slug)
    {
        $page = Page::findBySlug($slug);

        return view('modules.page', ['page' => $page]);
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

}
