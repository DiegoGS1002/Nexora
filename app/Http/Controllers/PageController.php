<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()     { return view('home'); }
    public function erp()      { return view('erp'); }
    public function fdv()      { return view('fdv'); }
    public function ecommerce(){ return view('ecommerce'); }
    public function sobre()    { return view('sobre'); }
    public function demo()     { return view('demo'); }
    public function contato()  { return view('contato'); }

    public function storeDemoLead(Request $request)
    {
        $request->validate([
            'nome'      => 'required|string|max:100',
            'empresa'   => 'required|string|max:100',
            'whatsapp'  => 'required|string|max:20',
            'segmento'  => 'required|string',
            'interesse' => 'required|string',
        ]);

        // TODO: salvar no banco / enviar e-mail / webhook CRM
        return back()->with('success', 'Solicitação enviada! Em breve entraremos em contato.');
    }

    public function storeContato(Request $request)
    {
        $request->validate([
            'nome'     => 'required|string|max:100',
            'email'    => 'required|email',
            'mensagem' => 'required|string|max:2000',
        ]);

        return back()->with('success', 'Mensagem enviada com sucesso!');
    }
}

