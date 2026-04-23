<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        $data = $request->validate([
            'nome'      => 'required|string|max:100',
            'empresa'   => 'required|string|max:100',
            'whatsapp'  => 'required|string|max:20',
            'segmento'  => 'required|string',
            'interesse' => 'required|string',
        ]);

        $to    = config('nexora.mail_to', 'diegoaugusto.garciaa@gmail.com');
        $waNr  = config('nexora.whatsapp', '5532984502345');
        $waLink = "https://wa.me/{$waNr}?text=" . urlencode(
            "🔔 Novo Lead Demo Nexora\nNome: {$data['nome']}\nEmpresa: {$data['empresa']}\nWhatsApp: {$data['whatsapp']}\nSegmento: {$data['segmento']}\nInteresse: {$data['interesse']}"
        );

        $html = "
            <h2 style='color:#0ea5e9'>🚀 Novo Agendamento de Demonstração — Nexora</h2>
            <table cellpadding='8' style='border-collapse:collapse;width:100%;font-family:sans-serif'>
                <tr><td style='background:#f1f5f9;font-weight:bold'>Nome</td><td>{$data['nome']}</td></tr>
                <tr><td style='background:#f1f5f9;font-weight:bold'>Empresa</td><td>{$data['empresa']}</td></tr>
                <tr><td style='background:#f1f5f9;font-weight:bold'>WhatsApp</td><td>{$data['whatsapp']}</td></tr>
                <tr><td style='background:#f1f5f9;font-weight:bold'>Segmento</td><td>{$data['segmento']}</td></tr>
                <tr><td style='background:#f1f5f9;font-weight:bold'>Interesse</td><td>{$data['interesse']}</td></tr>
            </table>
            <p style='margin-top:20px'>
                <a href='{$waLink}' style='background:#25d366;color:#fff;padding:10px 20px;border-radius:6px;text-decoration:none;font-family:sans-serif'>
                    💬 Responder via WhatsApp
                </a>
            </p>
        ";

        try {
            Mail::html($html, function ($message) use ($to, $data) {
                $message->to($to)
                        ->subject("🔔 Demo Nexora — {$data['nome']} ({$data['empresa']})");
            });
        } catch (\Exception $e) {
            \Log::error('Falha ao enviar e-mail demo: ' . $e->getMessage());
        }

        return back()->with('success', 'Solicitação enviada! Em breve entraremos em contato.');
    }

    public function storeContato(Request $request)
    {
        $data = $request->validate([
            'nome'     => 'required|string|max:100',
            'email'    => 'required|email',
            'mensagem' => 'required|string|max:2000',
        ]);

        $to    = config('nexora.mail_to', 'diegoaugusto.garciaa@gmail.com');
        $waNr  = config('nexora.whatsapp', '5532984502345');
        $waLink = "https://wa.me/{$waNr}?text=" . urlencode(
            "📩 Contato Nexora\nNome: {$data['nome']}\nE-mail: {$data['email']}\nMensagem: {$data['mensagem']}"
        );

        $html = "
            <h2 style='color:#0ea5e9'>📩 Nova Mensagem de Contato — Nexora</h2>
            <table cellpadding='8' style='border-collapse:collapse;width:100%;font-family:sans-serif'>
                <tr><td style='background:#f1f5f9;font-weight:bold'>Nome</td><td>{$data['nome']}</td></tr>
                <tr><td style='background:#f1f5f9;font-weight:bold'>E-mail</td><td>{$data['email']}</td></tr>
                <tr><td style='background:#f1f5f9;font-weight:bold;vertical-align:top'>Mensagem</td><td>{$data['mensagem']}</td></tr>
            </table>
            <p style='margin-top:20px'>
                <a href='{$waLink}' style='background:#25d366;color:#fff;padding:10px 20px;border-radius:6px;text-decoration:none;font-family:sans-serif'>
                    💬 Responder via WhatsApp
                </a>
            </p>
        ";

        try {
            Mail::html($html, function ($message) use ($to, $data) {
                $message->to($to)
                        ->replyTo($data['email'], $data['nome'])
                        ->subject("📩 Contato Nexora — {$data['nome']}");
            });
        } catch (\Exception $e) {
            \Log::error('Falha ao enviar e-mail contato: ' . $e->getMessage());
        }

        return back()->with('success', 'Mensagem enviada com sucesso!');
    }
}

