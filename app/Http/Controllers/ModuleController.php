<?php

namespace webTV\Http\Controllers;

use Illuminate\Http\Request;

class ModuleController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function producao(){
        return view('modules.producao');
    }

    public function operacao(){
        return view('modules.operacao');
    }

}
