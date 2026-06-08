@extends('layouts.app')
@section('title', 'Nexora E-commerce — Em Breve')
@section('content')

{{-- HERO EM DESENVOLVIMENTO --}}
<section class="relative min-h-screen flex items-center justify-center overflow-hidden hero-glow grid-overlay pt-20">

    {{-- Glow blobs --}}
    <div class="absolute top-1/4 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-blue-600/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-1/4 right-1/4 w-[400px] h-[400px] bg-cyan-500/8 rounded-full blur-3xl pointer-events-none"></div>

    {{-- Orbit rings decorativos --}}
    <div class="orbit-ring w-[420px] h-[420px] opacity-30"></div>
    <div class="orbit-ring w-[580px] h-[580px] opacity-20"></div>
    <div class="orbit-ring w-[740px] h-[740px] opacity-10"></div>

    <div class="max-w-3xl mx-auto px-6 text-center relative z-10">

        {{-- Badge --}}
        <div class="badge mb-8 mx-auto">
            <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-pulse"></span>
            Em Desenvolvimento
        </div>

        {{-- Ícone central --}}
        <div class="w-24 h-24 rounded-3xl bg-gradient-to-br from-cyan-600/30 to-blue-600/30 border border-cyan-500/30 flex items-center justify-center text-5xl mx-auto mb-10 pulse-glow">
            🛒
        </div>

        {{-- Título --}}
        <h1 class="font-display font-bold text-5xl md:text-6xl text-white mb-6 leading-tight">
            Nexora E-commerce<br>
            <span class="gradient-text">está a caminho</span>
        </h1>

        {{-- Subtítulo --}}
        <p class="text-slate-300 text-xl leading-relaxed mb-4 max-w-xl mx-auto">
            Estamos construindo algo poderoso. Em breve, seu negócio terá um hub omnichannel totalmente integrado ao ecossistema Nexora.
        </p>
        <p class="text-slate-500 text-sm mb-12">
            Novas informações em breve. Fique de olho.
        </p>

        {{-- Barra de progresso --}}
        <div class="max-w-md mx-auto mb-12">
            <div class="flex items-center justify-between mb-2">
                <span class="text-xs text-slate-400 font-medium uppercase tracking-widest">Progresso</span>
                <span class="text-xs text-cyan-400 font-semibold">Em andamento</span>
            </div>
            <div class="h-1.5 bg-slate-800 rounded-full overflow-hidden">
                <div class="h-full w-2/5 rounded-full bg-gradient-to-r from-blue-600 to-cyan-400 pulse-glow"></div>
            </div>
        </div>

        {{-- Cards de preview --}}
        <div class="grid sm:grid-cols-3 gap-4 mb-14">
            @foreach([
                ['🛍️', 'Catálogo integrado', 'Produtos sincronizados diretamente do ERP.'],
                ['📦', 'Estoque em tempo real', 'Nunca venda o que não tem em estoque.'],
                ['🔗', 'Hub omnichannel', 'Todos os canais de venda em um único lugar.'],
            ] as [$icon, $title, $desc])
            <div class="glass-card p-6 text-center reveal" style="opacity:0.7">
                <div class="text-3xl mb-3">{{ $icon }}</div>
                <h3 class="font-display font-semibold text-white text-sm mb-1">{{ $title }}</h3>
                <p class="text-slate-500 text-xs leading-relaxed">{{ $desc }}</p>
                <div class="mt-3 flex items-center justify-center gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-slate-600"></span>
                    <span class="text-slate-600 text-xs">Em breve</span>
                </div>
            </div>
            @endforeach
        </div>

        {{-- CTAs --}}
        <div class="flex gap-4 justify-center flex-wrap">
            <a href="{{ route('home') }}" class="btn-primary">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"/>
                </svg>
                Voltar ao início
            </a>
            <a href="{{ route('contato') }}" class="btn-secondary">Me avisar quando lançar</a>
        </div>

    </div>
</section>

{{-- DIVISOR + CONTEXTO --}}
<section class="py-20 bg-[#020617]">
    <div class="max-w-4xl mx-auto px-6">
        <div class="section-divider mb-16"></div>
        <div class="glass-card p-10 text-center reveal" style="background:linear-gradient(135deg,rgba(37,99,235,.10),rgba(56,189,248,.05))">
            <p class="text-slate-400 text-sm uppercase tracking-widest mb-3">Parte do ecossistema Nexora</p>
            <h2 class="font-display font-bold text-3xl text-white mb-4">
                Enquanto isso, conheça o <span class="gradient-text">ERP e o FDV</span>
            </h2>
            <p class="text-slate-300 leading-relaxed max-w-xl mx-auto mb-8">
                O Nexora EMS ERP e o NexoraFDV já estão disponíveis. Comece a integrar sua operação agora mesmo.
            </p>
            <div class="flex gap-4 justify-center flex-wrap">
                <a href="{{ route('erp') }}" class="btn-primary">Conhecer o ERP</a>
                <a href="{{ route('fdv') }}" class="btn-secondary">Ver NexoraFDV</a>
            </div>
        </div>
    </div>
</section>

@endsection
