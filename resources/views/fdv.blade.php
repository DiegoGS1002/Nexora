@extends('layouts.app')
@section('title', 'NexoraFDV — Vendas em campo conectadas ao ERP')
@section('meta_description', 'Pedidos, visitas, CRM, roteiros e sincronização offline para equipes comerciais conectadas ao ERP.')
@section('body_class', 'page-inner page-fdv')

@section('content')
<section class="inner-hero inner-hero--reverse" aria-labelledby="fdv-title">
    <div class="inner-hero__copy">
        <p class="inner-hero__product">NexoraFDV está em pré-lançamento.</p>
        <h1 id="fdv-title">Venda ativa.<br>Até offline.</h1>
        <p class="inner-hero__lead">Visitas, pedidos, roteiros, metas e comissões seguem conectados ao ERP — mesmo quando a equipe está offline.</p>
        <div class="inner-hero__actions"><a href="#espera" class="btn-primary">Entrar na lista de espera</a><a href="{{ route('erp') }}" class="text-link">Conhecer o ERP <span aria-hidden="true">↗</span></a></div>
    </div>
    <div class="inner-hero__visual inner-hero__visual--fdv">
        <div class="inner-orbit" aria-hidden="true"><span></span><i></i></div>
        <div class="product-screen route-screen" data-ui>
            <div class="product-screen__bar"><strong>Rota comercial</strong><span>8 visitas</span></div>
            <div class="route-screen__seller"><span>DG</span><div><strong>Diego Garcia</strong><small>Rota Zona Norte</small></div><b>74%</b></div>
            <ol>
                <li class="is-done"><span>08:30</span><strong>Mercado Central</strong><small>Pedido sincronizado</small></li>
                <li class="is-current"><span>10:15</span><strong>Grupo Horizonte</strong><small>Visita em andamento</small></li>
                <li><span>11:40</span><strong>Rede União</strong><small>Próxima parada</small></li>
            </ol>
        </div>
    </div>
</section>

<section class="fdv-flow" aria-labelledby="fdv-flow-title">
    <div class="site-container">
        <div class="section-heading section-heading--light" data-reveal><h2 id="fdv-flow-title">Do cliente ao ERP, sem intervalo.</h2><p>O representante trabalha com autonomia; a empresa acompanha com contexto.</p></div>
        <div class="fdv-flow__path" data-reveal>
            <span>Visita</span><span>Pedido</span><span>Estoque</span><span>Comissão</span><span>Financeiro</span>
        </div>
    </div>
</section>

<section class="feature-sentences" aria-label="Recursos do NexoraFDV">
    @foreach([
        ['Venda mesmo sem sinal.', 'Sincronização offline preserva a rotina em campo.'],
        ['A rota vira contexto.', 'Check-in, visitas e oportunidades permanecem conectados.'],
        ['O pedido nasce integrado.', 'Produtos, preços e estoque seguem a regra do ERP.'],
        ['A gestão acompanha agora.', 'Metas, comissões e desempenho ficam no mesmo fluxo.'],
    ] as [$title, $copy])
        <article data-reveal><div class="site-container"><h2>{{ $title }}</h2><p>{{ $copy }}</p><span aria-hidden="true"></span></div></article>
    @endforeach
</section>

<section id="espera" class="lead-section" aria-labelledby="wait-title">
    <div class="site-container lead-section__layout">
        <div data-reveal><h2 id="wait-title">Chegue antes<br>à nova rota.</h2><p>Entre na lista e receba as novidades do pré-lançamento do NexoraFDV.</p></div>
        <form action="{{ route('demo.store') }}" method="POST" class="lead-form" data-ui data-reveal>
            @csrf
            <input type="hidden" name="interesse" value="Força de Vendas">
            <div class="field"><label for="fdv-nome">Nome</label><input id="fdv-nome" type="text" name="nome" required class="form-input" autocomplete="name"></div>
            <div class="field"><label for="fdv-empresa">Empresa</label><input id="fdv-empresa" type="text" name="empresa" required class="form-input" autocomplete="organization"></div>
            <div class="field"><label for="fdv-whatsapp">WhatsApp</label><input id="fdv-whatsapp" type="tel" name="whatsapp" required class="form-input" autocomplete="tel"></div>
            <div class="field"><label for="fdv-segmento">Segmento</label><select id="fdv-segmento" name="segmento" required class="form-input"><option value="">Selecione</option><option>Varejo</option><option>Atacado/Distribuição</option><option>Indústria</option><option>Serviços</option></select></div>
            <button type="submit" class="btn-primary">Entrar na lista</button>
            @if(session('success'))<p class="form-success" role="status">{{ session('success') }}</p>@endif
        </form>
    </div>
</section>
@endsection
