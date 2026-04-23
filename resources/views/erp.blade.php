@extends('layouts.app')
@section('title', 'Nexora EMS ERP — ERP modular para operações complexas')
@section('content')
<section class="relative min-h-[70vh] flex items-center hero-glow grid-overlay pt-20">
    <div class="max-w-7xl mx-auto px-6 py-24 text-center">
        <div class="badge mb-6 mx-auto">Nexora EMS ERP</div>
        <h1 class="font-display font-bold text-5xl md:text-6xl text-white mb-6">
            ERP modular para<br><span class="gradient-text">operações complexas</span>
        </h1>
        <p class="text-slate-300 text-xl max-w-2xl mx-auto mb-10">
            Do financeiro ao chão de fábrica, com IA embarcada consultando dados reais da sua empresa em tempo real.
        </p>
        <div class="flex gap-4 justify-center">
            <a href="{{ route('demo') }}" class="btn-primary pulse-glow">Solicitar Demo</a>
            <a href="#modulos" class="btn-secondary">Ver módulos</a>
        </div>
    </div>
</section>
<section id="modulos" class="py-24 bg-[#020617]">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-14 reveal">
            <div class="badge mb-4">Módulos</div>
            <h2 class="font-display font-bold text-4xl text-white">9 domínios. +30 módulos.</h2>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
                ['💰','Financeiro','Contas a pagar/receber, fluxo de caixa, DRE, conciliação bancária.'],
                ['📄','Fiscal','Emissão de NF-e, NFC-e, CT-e. SPED, SEFAZ, apuração automatizada.'],
                ['🛒','Compras','Requisições, cotações, ordens de compra e fornecedores.'],
                ['📦','Estoque','Controle de entrada/saída, rastreabilidade e inventário.'],
                ['🏭','Produção','Ordens de produção, BOM, apontamentos e qualidade.'],
                ['👥','RH','Folha de pagamento, ponto eletrônico e benefícios.'],
                ['🚚','Logística','Expedição, rotas e integração com transportadoras.'],
                ['📊','Vendas','Pedidos, propostas, CRM básico e metas.'],
                ['🤖','IA Suporte','Assistente contextual, RAG e insights preditivos.'],
            ] as [$icon, $name, $desc])
            <div class="glass-card p-7 reveal">
                <span class="text-4xl mb-4 block">{{ $icon }}</span>
                <h3 class="font-display font-bold text-lg text-white mb-3">{{ $name }}</h3>
                <p class="text-slate-400 text-sm leading-relaxed">{{ $desc }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="py-20 text-center">
    <div class="max-w-2xl mx-auto px-6 reveal">
        <h2 class="font-display font-bold text-4xl text-white mb-6">Veja o ERP em ação</h2>
        <p class="text-slate-300 mb-8">Demonstração personalizada para o seu segmento.</p>
        <a href="{{ route('demo') }}" class="btn-primary pulse-glow">Agendar demonstração</a>
    </div>
</section>
@endsection
