@extends('layouts.app')
@section('title', 'Força de Vendas Nexora — Dashboard Comercial integrado ao ERP')
@section('content')
<section class="relative min-h-screen flex items-center hero-glow grid-overlay pt-20">
    <div class="max-w-7xl mx-auto px-6 py-24 grid md:grid-cols-2 gap-16 items-center">
        <div>
            <div class="badge mb-6" style="color:#94a3b8;border-color:rgba(148,163,184,.3);background:rgba(148,163,184,.06)">
                <span class="w-1.5 h-1.5 rounded-full bg-slate-400 animate-pulse"></span>
                Pré-lançamento · Coming Soon
            </div>
            <h1 class="font-display font-bold text-5xl md:text-6xl text-white mb-6">
                Força de Vendas<br><span class="gradient-text">com inteligência comercial</span>
            </h1>
            <p class="text-slate-300 text-lg mb-10">
                Dashboard comercial completo integrado ao ERP. CRM, pedidos, clientes, rotas e metas em uma única plataforma.
            </p>
            <a href="#espera" class="btn-primary pulse-glow">Entrar na lista de espera</a>
        </div>
        <div class="glass-card p-10 text-center">
            <div class="text-8xl mb-6">📊</div>
            <h3 class="font-display font-bold text-2xl text-white mb-4">Em desenvolvimento</h3>
            <p class="text-slate-400 mb-8 text-sm">Dashboard comercial completo para equipes de vendas.</p>
            <div class="grid grid-cols-2 gap-3 text-xs">
                @foreach(['Dashboard Comercial','Clientes','Prospects','Agenda Visitas','Pedidos','Catálogo','Metas/Comissão','CRM','Promoções','Roteirização','Financeiro','Assistente IA'] as $f)
                <div class="glass-card px-3 py-2 text-slate-400">{{ $f }}</div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section id="espera" class="py-24 bg-[#0B1020]">
    <div class="max-w-xl mx-auto px-6">
        <div class="text-center mb-10 reveal">
            <div class="badge mb-4">Lista de espera</div>
            <h2 class="font-display font-bold text-3xl text-white mb-3">Seja o primeiro a saber</h2>
            <p class="text-slate-400">Cadastre-se e receba acesso antecipado ao módulo Força de Vendas.</p>
        </div>
        <div class="glass-card p-8 reveal">
            <form action="{{ route('demo.store') }}" method="POST" class="space-y-4">
                @csrf
                <input type="hidden" name="interesse" value="Força de Vendas">
                <input type="text" name="nome" required class="form-input" placeholder="Nome">
                <input type="text" name="empresa" required class="form-input" placeholder="Empresa">
                <input type="text" name="whatsapp" required class="form-input" placeholder="WhatsApp">
                <select name="segmento" required class="form-input">
                    <option value="">Segmento...</option>
                    <option>Varejo</option><option>Atacado/Distribuição</option><option>Indústria</option><option>Serviços</option>
                </select>
                <button type="submit" class="btn-primary w-full justify-center">Entrar na lista</button>
            </form>
            @if(session('success'))
            <div class="mt-4 p-4 rounded-xl bg-green-500/10 border border-green-500/25 text-green-400 text-sm text-center">
                {{ session('success') }}
            </div>
            @endif
        </div>
    </div>
</section>
@endsection
