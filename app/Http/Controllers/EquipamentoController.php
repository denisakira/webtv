<?php

namespace webTV\Http\Controllers;

use Illuminate\Http\Request;

class EquipamentoController extends Controller
{
    //
    public function qrgen() {
        return view('modules.qrgen');
    }

}
