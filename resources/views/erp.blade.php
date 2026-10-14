@extends('layouts.app')
@section('title', 'Nexora EMS ERP — Controle para operações complexas')
@section('meta_description', 'ERP modular com mais de 30 módulos, inteligência contextual e uma base operacional única.')
@section('body_class', 'page-inner page-erp')

@section('content')
<section class="inner-hero" aria-labelledby="erp-title">
    <div class="inner-hero__copy">
        <p class="inner-hero__product">Nexora EMS ERP está disponível.</p>
        <h1 id="erp-title">Controle.<br>Sem silos.</h1>
        <p class="inner-hero__lead">Do financeiro ao chão de fábrica, mais de 30 módulos trabalham sobre a mesma informação — com IA contextual dentro da rotina.</p>
        <div class="inner-hero__actions">
            <a href="{{ route('demo', ['interesse' => 'ERP']) }}" class="btn-primary">Ver o ERP em ação</a>
            <a href="#modulos" class="text-link">Explorar módulos <span aria-hidden="true">↓</span></a>
        </div>
    </div>

    <div class="inner-hero__visual inner-hero__visual--erp">
        <div class="inner-orbit" aria-hidden="true"><span></span><i></i></div>
        <div class="product-screen ledger-screen" data-ui>
            <div class="product-screen__bar"><strong>Visão operacional</strong><span>Hoje, 14:32</span></div>
            <div class="ledger-screen__summary">
                <p>Resultado projetado</p><strong>R$ 482.760</strong><span>Fluxo atualizado agora</span>
            </div>
            <div class="ledger-screen__columns">
                <div><span>Receber</span><strong>R$ 318 mil</strong><small>42 títulos</small></div>
                <div class="is-focus"><span>Estoque</span><strong>96,4%</strong><small>disponibilidade</small></div>
                <div><span>Pedidos</span><strong>128</strong><small>em fluxo</small></div>
            </div>
        </div>
    </div>
</section>

<section class="inner-statement" aria-label="Proposta do ERP">
    <p data-reveal>Um pedido movimenta estoque, fiscal, financeiro e gestão sem recomeçar o processo em cada área.</p>
</section>

<section id="modulos" class="module-index" aria-labelledby="modules-title">
    <div class="site-container">
        <div class="section-heading" data-reveal>
            <h2 id="modules-title">Nove domínios.<br>Uma operação.</h2>
            <p>Ative os módulos que fazem sentido agora e amplie a plataforma sem fragmentar os dados.</p>
        </div>
        <div class="module-index__list">
            @foreach([
                ['Financeiro', 'Contas, caixa, DRE e conciliação bancária.'],
                ['Fiscal', 'NF-e, NFC-e, CT-e, SPED e apuração.'],
                ['Compras', 'Requisições, cotações e fornecedores.'],
                ['Estoque', 'Movimentação, rastreabilidade e inventário.'],
                ['Produção', 'Ordens, estrutura, apontamentos e qualidade.'],
                ['Pessoas', 'Folha, ponto eletrônico e benefícios.'],
                ['Logística', 'Expedição, rotas e transportadoras.'],
                ['Vendas', 'Pedidos, propostas, CRM e metas.'],
                ['IA contextual', 'Consultas, análises e apoio à rotina.'],
            ] as [$name, $desc])
                <article class="module-row" data-reveal><h3>{{ $name }}</h3><p>{{ $desc }}</p><span aria-hidden="true">↗</span></article>
            @endforeach
        </div>
    </div>
</section>

<section class="product-proof" aria-labelledby="erp-proof-title">
    <div class="site-container product-proof__layout">
        <h2 id="erp-proof-title" data-reveal>Decisão com contexto, não com planilhas paralelas.</h2>
        <div class="product-proof__facts">
            <p data-reveal><strong>Uma base operacional</strong> para financeiro, fiscal, compras, estoque, produção, pessoas, logística e vendas.</p>
            <p data-reveal><strong>IA dentro do processo</strong> para consultar os dados da própria empresa e apoiar análises recorrentes.</p>
            <p data-reveal><strong>Crescimento modular</strong> para começar com o essencial e conectar novas frentes no ritmo do negócio.</p>
        </div>
    </div>
</section>

<section class="inner-cta" aria-labelledby="erp-cta-title">
    <div class="site-container inner-cta__layout" data-reveal>
        <h2 id="erp-cta-title">Veja seu fluxo<br>na Nexora.</h2>
        <div><p>Uma demonstração construída a partir da operação real da sua empresa.</p><a href="{{ route('demo', ['interesse' => 'ERP']) }}" class="btn-primary">Agendar demonstração</a></div>
    </div>
</section>
@endsection
