@extends('layouts.app')
@section('title', 'Sobre a Nexora — Tecnologia empresarial conectada')
@section('meta_description', 'A Nexora conecta operação, vendas e comércio digital em uma plataforma empresarial inteligente.')
@section('body_class', 'page-inner page-about')

@section('content')
<section class="about-hero" aria-labelledby="about-title">
    <div class="about-hero__mark" aria-hidden="true"><span>N</span><i></i><b></b></div>
    <div class="about-hero__copy">
        <h1 id="about-title">Empresas em<br>movimento.</h1>
        <p>A Nexora nasceu para substituir sistemas isolados por uma operação conectada, inteligente e preparada para crescer.</p>
    </div>
</section>

<section class="about-origin" aria-labelledby="origin-title">
    <div class="site-container about-origin__layout">
        <h2 id="origin-title" data-reveal>Uma plataforma,<br>não mais uma ilha.</h2>
        <div data-reveal>
            <p>ERP, Força de Vendas e E-commerce foram pensados como partes de um único ecossistema. A informação percorre o negócio sem perder contexto entre operação, equipe comercial e canal digital.</p>
            <p>O resultado é tecnologia enterprise mais acessível, modular e próxima do trabalho real de empresas que querem evoluir.</p>
        </div>
    </div>
</section>

<section class="about-principles" aria-labelledby="principles-title">
    <div class="site-container">
        <div class="section-heading section-heading--light" data-reveal><h2 id="principles-title">O que nos orienta.</h2><p>Decisões de produto que continuam válidas quando a operação cresce.</p></div>
        <div class="principle-list">
            @foreach([
                ['Integração real', 'Dados e processos conectados de verdade, não apenas telas reunidas.'],
                ['Inteligência aplicada', 'IA usada para resolver rotinas e decisões concretas.'],
                ['Tecnologia como motor', 'Software rápido, confiável e capaz de sustentar crescimento.'],
                ['Evolução modular', 'Produtos que acompanham cada nova fase sem exigir um recomeço.'],
            ] as [$title, $copy])
                <article data-reveal><h3>{{ $title }}</h3><p>{{ $copy }}</p><span aria-hidden="true"></span></article>
            @endforeach
        </div>
    </div>
</section>

<section class="about-purpose" aria-label="Missão e visão">
    <div class="site-container about-purpose__layout">
        <article data-reveal><h2>Nossa missão.</h2><p>Democratizar tecnologia empresarial inteligente para que mais empresas operem melhor, vendam com estratégia e cresçam com controle.</p></article>
        <article data-reveal><h2>Nossa visão.</h2><p>Construir uma nova geração de plataformas que conectam operações, pessoas e dados em um único fluxo.</p></article>
    </div>
</section>

<section class="inner-cta" aria-labelledby="about-cta-title">
    <div class="site-container inner-cta__layout" data-reveal>
        <h2 id="about-cta-title">Operate.<br>Sell. Scale.</h2>
        <div><p>Mais do que software: um ecossistema para evolução empresarial.</p><a href="{{ route('demo') }}" class="btn-primary">Conhecer na prática</a></div>
    </div>
</section>
@endsection
