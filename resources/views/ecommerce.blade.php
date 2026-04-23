@extends('layouts.app')
@section('title', 'Nexora E-commerce — Hub omnichannel integrado')
@section('content')
<section class="relative min-h-[70vh] flex items-center hero-glow grid-overlay pt-20">
    <div class="max-w-7xl mx-auto px-6 py-24 text-center">
        <div class="badge mb-6 mx-auto">Nexora E-commerce</div>
        <h1 class="font-display font-bold text-5xl md:text-6xl text-white mb-6">
            Venda online com<br><span class="gradient-text">inteligência operacional</span>
        </h1>
        <p class="text-slate-300 text-xl max-w-2xl mx-auto mb-10">
            Hub omnichannel integrado ao ERP. Estoque, pedidos e catálogo sincronizados em tempo real.
        </p>
        <a href="{{ route('demo') }}" class="btn-primary pulse-glow">Solicitar Demo</a>
    </div>
</section>
<section class="py-24 bg-[#020617]">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach([
                ['🛍️','Catálogo sincronizado','Produtos gerenciados no ERP, publicados automaticamente.'],
                ['📦','Estoque em tempo real','Nunca venda o que não tem. Estoque atualizado a cada pedido.'],
                ['📋','Pedidos no ERP','Todo pedido online entra direto no fluxo de vendas.'],
                ['💲','Pricing integrado','Tabelas de preço e promoções centralizadas.'],
            ] as [$icon,$title,$desc])
            <div class="glass-card p-7 text-center reveal">
                <span class="text-4xl block mb-4">{{ $icon }}</span>
                <h3 class="font-display font-bold text-white mb-2">{{ $title }}</h3>
                <p class="text-slate-400 text-sm">{{ $desc }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="py-20 text-center">
    <div class="max-w-xl mx-auto px-6 reveal">
        <h2 class="font-display font-bold text-4xl text-white mb-6">Integre sua loja à Nexora</h2>
        <a href="{{ route('demo') }}" class="btn-primary pulse-glow">Agendar demonstração</a>
    </div>
</section>
@endsection
