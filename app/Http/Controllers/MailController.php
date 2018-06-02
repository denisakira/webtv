<?php

namespace webTV\Http\Controllers;

use Illuminate\Http\Request;
use webTV\Mail\Contato;
use webTV\Mail\Solicite;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    /**
     * Valida os dados do form, envia o e-mail para comunicação e redireciona para home
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function mailContato()
    {
        $user = $this->validate(request(), [
            'nome' => 'required',
            'email' => 'required|email',
            'assunto' => 'required',
            'mensagem' => 'required',
        ]);

        Mail::to('comunicacao@faacwebtv.com.br')->send(new Contato($user));

        return redirect('home');

    }

    /**
     * Valida os dados do form, envia o e-mail para produção e redireciona para home
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function mailSolicite()
    {
        $user = $this->validate(request(), [
            'evento' => 'required',
            'responsavel' => 'required',
            'email' => 'required|email',
            'vinculo-unesp' => 'required',
            'vinculo' => 'required',
            'descricao' => 'required',
            'data' => 'required|date',
            'hora-ini' => 'required',
            'hora-fim' => 'required',
            'local' => 'required',
            'redes' => '',
            'escolha' => '',
            'outro' => '',
        ]);

        Mail::to('producao@faacwebtv.com.br')->send(new Solicite($user));

        return redirect('home');

    }

}
