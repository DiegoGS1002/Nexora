@extends('layouts.app')
@section('title', 'Contato — Nexora')
@section('content')
<section class="relative pt-40 pb-24 hero-glow grid-overlay">
    <div class="max-w-5xl mx-auto px-6">
        <div class="text-center mb-14 reveal">
            <div class="badge mb-4">Contato</div>
            <h1 class="font-display font-bold text-5xl text-white mb-4">
                Fale com a <span class="gradient-text">Nexora</span>
            </h1>
            <p class="text-slate-300 text-lg">Nossa equipe está pronta para responder.</p>
        </div>
        <div class="grid md:grid-cols-2 gap-12 items-start">
            <div class="space-y-5 reveal">
                <div class="glass-card p-6 flex items-center gap-5">
                    <span class="text-3xl">📧</span>
                    <div>
                        <div class="text-slate-400 text-xs mb-0.5">E-mail</div>
                        <a href="mailto:diegoaugusto.garciaa@gmail.com" class="text-white font-semibold hover:text-cyan-400 transition-colors">diegoaugusto.garciaa@gmail.com</a>
                    </div>
                </div>
                <div class="glass-card p-6 flex items-center gap-5">
                    <span class="text-3xl">💬</span>
                    <div>
                        <div class="text-slate-400 text-xs mb-0.5">WhatsApp</div>
                        <a href="https://wa.me/5532984502345" target="_blank" class="text-white font-semibold hover:text-green-400 transition-colors">(32) 98450-2345</a>
                    </div>
                </div>
                <div class="glass-card p-6 flex items-center gap-5">
                    <span class="text-3xl">📍</span>
                    <div>
                        <div class="text-slate-400 text-xs mb-0.5">Endereço</div>
                        <div class="text-white font-semibold">Brasil</div>
                    </div>
                </div>
                <a href="https://wa.me/5532984502345?text={{ urlencode('Olá! Gostaria de falar com a Nexora.') }}" target="_blank"
                   class="flex items-center gap-3 justify-center w-full py-3 rounded-xl bg-green-500 hover:bg-green-400 transition-colors text-white font-semibold text-sm">
                    💬 Falar pelo WhatsApp agora
                </a>
            </div>
            <div class="glass-card p-8 reveal">
                <h2 class="font-display font-bold text-xl text-white mb-6">Envie uma mensagem</h2>
                @if(session('success'))
                <div class="mb-5 p-4 rounded-xl bg-green-500/10 border border-green-500/25 text-green-400 text-sm text-center">
                    {{ session('success') }}
                </div>
                @endif
                <form action="{{ route('contato.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <input type="text" name="nome" required class="form-input" placeholder="Nome">
                    <input type="email" name="email" required class="form-input" placeholder="E-mail">
                    <textarea name="mensagem" required rows="5" class="form-input resize-none" placeholder="Como podemos ajudar?"></textarea>
                    <button type="submit" class="btn-primary w-full justify-center">Enviar mensagem</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
