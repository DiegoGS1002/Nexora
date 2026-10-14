@extends('layouts.app')
@section('title', 'Nexora E-commerce — Comércio conectado à operação')
@section('meta_description', 'Catálogo, estoque, pedidos e expedição conectados ao ecossistema Nexora.')
@section('body_class', 'page-inner page-commerce')

@section('content')
<section class="commerce-hero" aria-labelledby="commerce-title">
    <div class="commerce-hero__orbit" aria-hidden="true"><span></span><i></i><b></b></div>
    <div class="commerce-hero__copy">
        <p>Nexora E-commerce está em desenvolvimento.</p>
        <h1 id="commerce-title">O canal digital<br>entra no fluxo.</h1>
        <span>Catálogo, estoque, pedidos e expedição conectados à mesma operação.</span>
        <div class="inner-hero__actions"><a href="{{ route('contato') }}" class="btn-primary">Quero acompanhar</a><a href="#conexao" class="text-link">Ver a conexão <span aria-hidden="true">↓</span></a></div>
    </div>
    <div class="commerce-screen" data-ui>
        <div class="product-screen__bar"><strong>Pedidos digitais</strong><span>Sincronização ativa</span></div>
        <div class="commerce-screen__order"><div><span>Pedido #2841</span><strong>R$ 1.890,00</strong></div><b>Confirmado</b></div>
        <div class="commerce-screen__steps"><span class="is-done">Catálogo</span><span class="is-active">Estoque</span><span>Fiscal</span><span>Expedição</span></div>
    </div>
</section>

<section class="commerce-statement" aria-label="Visão do produto"><p data-reveal>Vender online sem criar outra ilha de informação.</p></section>

<section id="conexao" class="commerce-connection" aria-labelledby="connection-title">
    <div class="site-container">
        <div class="section-heading" data-reveal><h2 id="connection-title">Cada clique movimenta a operação.</h2><p>O novo canal nasce conectado ao núcleo Nexora e acompanha as mesmas regras do negócio.</p></div>
        <div class="commerce-connection__map" data-reveal>
            <div><strong>Catálogo</strong><span>Produtos e preços publicados a partir da base.</span></div>
            <div><strong>Estoque</strong><span>Disponibilidade atualizada em todos os canais.</span></div>
            <div><strong>Pedidos</strong><span>Venda digital entrando direto no fluxo operacional.</span></div>
            <div><strong>Expedição</strong><span>Separação e entrega acompanhadas até o fim.</span></div>
        </div>
    </div>
</section>

<section class="commerce-status" aria-labelledby="status-title">
    <div class="site-container commerce-status__layout">
        <div data-reveal><h2 id="status-title">Construção em curso.</h2><p>Enquanto o e-commerce avança, o ERP já organiza o núcleo e o NexoraFDV prepara a operação comercial.</p></div>
        <div class="commerce-status__links" data-reveal><a href="{{ route('erp') }}">Conhecer o ERP <span>↗</span></a><a href="{{ route('fdv') }}">Ver o NexoraFDV <span>↗</span></a></div>
    </div>
</section>
@endsection
