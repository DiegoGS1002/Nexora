@extends('layouts.app')
@section('title', 'Nexora — Gestão empresarial, vendas e e-commerce em um único ecossistema')
@section('meta_description', 'ERP, Frente de Vendas e E-commerce integrados com IA embarcada para escalar operações empresariais.')
@section('content')
{{-- HERO --}}
<section class="relative min-h-screen flex items-center justify-center overflow-hidden hero-glow grid-overlay pt-20">
    <div class="absolute top-1/4 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-blue-600/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-6 py-24 grid md:grid-cols-2 gap-16 items-center">
        <div class="relative z-10">
            <div class="badge mb-6">
                <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-pulse"></span>
                Enterprise Intelligence Platform
            </div>
            <h1 class="font-display font-bold text-5xl md:text-6xl leading-tight text-white mb-6">
                Gestão empresarial, vendas e e-commerce em<span class="gradient-text"> um único ecossistema.</span>
            </h1>
            <p class="text-slate-300 text-lg leading-relaxed mb-10 max-w-xl">
                ERP modular com IA embarcada, Frente de Vendas e E-commerce integrados para escalar operações.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="{{ route('demo') }}" class="btn-primary pulse-glow">
                    Solicitar demonstração
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
                <a href="{{ route('erp') }}" class="btn-secondary">Conhecer plataforma</a>
            </div>
            <div class="flex flex-wrap gap-8 mt-12 pt-8 border-t border-slate-800">
                @foreach([['30','+','Módulos'],['9','+','Domínios'],['1','x','IA integrada'],['100','%','Web']] as [$n,$suf,$label])
                <div>
                    <div class="counter font-display font-bold text-3xl text-white" data-target="{{ $n }}" data-suffix="{{ $suf }}">0{{ $suf }}</div>
                    <div class="text-slate-400 text-sm mt-0.5">{{ $label }}</div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="relative flex justify-center items-center h-[420px]">
            <div class="glass-card p-6 w-72 z-10 relative">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-xs text-slate-400 font-medium">Dashboard ERP</span>
                    <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span>
                </div>
                <div class="space-y-3">
                    @foreach([['Receita','R$ 284.590','+12%'],['Pedidos','1.247','+8%'],['Estoque','98,3%','OK']] as [$k,$v,$badge])
                    <div class="flex items-center justify-between py-2 border-b border-slate-800/60">
                        <span class="text-slate-400 text-xs">{{ $k }}</span>
                        <div class="flex items-center gap-2">
                            <span class="text-white text-sm font-semibold">{{ $v }}</span>
                            <span class="text-xs text-cyan-400 bg-cyan-400/10 px-2 py-0.5 rounded-full">{{ $badge }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @foreach([['Financeiro','top-4 -left-4','💰'],['Fiscal','top-4 -right-4','📄'],['Estoque','bottom-8 -left-8','📦'],['Produção','bottom-8 -right-8','⚙️'],['IA Assistente','top-1/2 -left-20','🤖']] as [$label,$pos,$icon])
            <div class="glass-card float-card absolute {{ $pos }} px-3 py-2 flex items-center gap-2 text-xs font-semibold text-white">
                <span>{{ $icon }}</span>{{ $label }}
            </div>
            @endforeach
        </div>
    </div>
</section>
{{-- PROBLEMA --}}
<section class="py-24 bg-[#020617]">
    <div class="max-w-6xl mx-auto px-6">
        <div class="section-divider mb-20"></div>
        <div class="text-center mb-16 reveal">
            <div class="badge mb-4">O Problema</div>
            <h2 class="font-display font-bold text-4xl md:text-5xl text-white mb-4">
                Empresas operam com sistemas desconectados
            </h2>
            <p class="text-slate-400 text-lg max-w-2xl mx-auto">Isso gera retrabalho, erros e falta de visão.</p>
        </div>
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="reveal">
                <h3 class="font-display font-semibold text-xl text-slate-300 mb-6 flex items-center gap-2">
                    <span class="w-6 h-6 rounded-full bg-red-500/20 border border-red-500/40 flex items-center justify-center text-red-400 text-xs">✕</span>
                    Sem Nexora
                </h3>
                <div class="space-y-3">
                    @foreach(['ERP separado','PDV separado','Loja virtual separada','Planilhas manuais','Dados inconsistentes'] as $item)
                    <div class="flex items-center gap-3 p-4 rounded-xl bg-red-500/5 border border-red-500/15 text-slate-300">
                        <span class="text-red-400">✕</span> {{ $item }}
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="reveal">
                <h3 class="font-display font-semibold text-xl text-slate-300 mb-6 flex items-center gap-2">
                    <span class="w-6 h-6 rounded-full bg-cyan-500/20 border border-cyan-500/40 flex items-center justify-center text-cyan-400 text-xs">✓</span>
                    Com Nexora
                </h3>
                <div class="space-y-3">
                    @foreach(['Gestão unificada','Vendas integradas','E-commerce conectado','IA tomando decisões','Visão 360° em tempo real'] as $item)
                    <div class="flex items-center gap-3 p-4 rounded-xl bg-cyan-500/5 border border-cyan-500/15 text-white">
                        <span class="text-cyan-400">✓</span> {{ $item }}
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
{{-- ECOSSISTEMA --}}
<section class="py-24">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16 reveal">
            <div class="badge mb-4">Ecossistema Nexora</div>
            <h2 class="font-display font-bold text-4xl md:text-5xl text-white mb-4">Três produtos. Uma plataforma.</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="glass-card p-8 reveal">
                <div class="w-12 h-12 rounded-2xl gradient-brand flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z"/>
                    </svg>
                </div>
                <div class="badge mb-3">Disponível</div>
                <h3 class="font-display font-bold text-xl text-white mb-3">Nexora EMS ERP</h3>
                <p class="text-slate-400 text-sm mb-5">ERP modular completo com IA embarcada.</p>
                <ul class="space-y-2 mb-6">
                    @foreach(['Financeiro','Fiscal','Compras','Produção','RH','Logística','IA embarcada'] as $m)
                    <li class="flex items-center gap-2 text-sm text-slate-300"><span class="text-cyan-400 text-xs">●</span> {{ $m }}</li>
                    @endforeach
                </ul>
                <a href="{{ route('erp') }}" class="btn-primary text-sm w-full justify-center">Ver ERP</a>
            </div>
            <div class="glass-card p-8 reveal">
                <div class="w-12 h-12 rounded-2xl bg-slate-700 flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-slate-300" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 5.25m8.5-5.25 1 5.25m-8.5 0H6m10.5 0H18"/>
                    </svg>
                </div>
                <div class="badge mb-3" style="color:#94a3b8;border-color:rgba(148,163,184,.3);background:rgba(148,163,184,.05)">Coming Soon</div>
                <h3 class="font-display font-bold text-xl text-white mb-3">Força de Vendas Nexora</h3>
                <p class="text-slate-400 text-sm mb-5">Dashboard comercial com CRM integrado ao ERP.</p>
                <ul class="space-y-2 mb-6">
                    @foreach(['Dashboard Comercial','Clientes & Prospects','Pedidos & Catálogo','Metas & Comissão','CRM & Roteirização'] as $m)
                    <li class="flex items-center gap-2 text-sm text-slate-400"><span class="text-slate-500 text-xs">●</span> {{ $m }}</li>
                    @endforeach
                </ul>
                <a href="{{ route('fdv') }}" class="btn-secondary text-sm w-full justify-center">Entrar na lista</a>
            </div>
            <div class="glass-card p-8 reveal">
                <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-cyan-600 to-blue-600 flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253"/>
                    </svg>
                </div>
                <div class="badge mb-3">Integrado</div>
                <h3 class="font-display font-bold text-xl text-white mb-3">Nexora E-commerce</h3>
                <p class="text-slate-400 text-sm mb-5">Hub omnichannel integrado.</p>
                <ul class="space-y-2 mb-6">
                    @foreach(['Loja virtual','Pedidos sincronizados','Estoque real-time','Catálogo único','Pricing integrado'] as $m)
                    <li class="flex items-center gap-2 text-sm text-slate-300"><span class="text-cyan-400 text-xs">●</span> {{ $m }}</li>
                    @endforeach
                </ul>
                <a href="{{ route('ecommerce') }}" class="btn-secondary text-sm w-full justify-center">Saiba mais</a>
            </div>
        </div>
    </div>
</section>
{{-- MÓDULOS --}}
<section class="py-24 bg-[#0B1020]">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16 reveal">
            <div class="badge mb-4">Módulos ERP</div>
            <h2 class="font-display font-bold text-4xl md:text-5xl text-white mb-4">+30 módulos para cada área</h2>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4">
            @foreach([['💰','Financeiro'],['📄','Fiscal'],['🛒','Compras'],['📦','Estoque'],['🏭','Produção'],['👥','RH'],['🚚','Logística'],['📊','Vendas'],['🤖','IA'],['⚙️','Config']] as [$icon,$name])
            <div class="glass-card p-5 flex flex-col items-center text-center reveal hover:border-cyan-400/40 cursor-pointer">
                <span class="text-3xl mb-3">{{ $icon }}</span>
                <span class="font-display font-semibold text-sm text-white">{{ $name }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>
{{-- CTA FINAL --}}
<section class="py-24">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <div class="glass-card p-16 reveal" style="background:linear-gradient(135deg,rgba(37,99,235,.15),rgba(56,189,248,.08))">
            <div class="badge mb-6 mx-auto">Comece hoje</div>
            <h2 class="font-display font-bold text-4xl md:text-5xl text-white mb-6">
                Pronto para operar com<br><span class="gradient-text">inteligência real?</span>
            </h2>
            <p class="text-slate-300 text-lg mb-10 max-w-xl mx-auto">
                Agende uma demonstração personalizada e veja como a Nexora pode transformar sua operação.
            </p>
            <div class="flex flex-wrap gap-4 justify-center">
                <a href="{{ route('demo') }}" class="btn-primary pulse-glow">
                    Agendar demonstração gratuita
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
                <a href="{{ route('erp') }}" class="btn-secondary">Ver plataforma</a>
            </div>
        </div>
    </div>
</section>
@endsection
