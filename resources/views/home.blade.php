@extends('layouts.app')
@section('title', 'Nexora — Tudo conecta. Nada para.')
@section('meta_description', 'ERP, força de vendas e e-commerce conectados em um fluxo empresarial contínuo, do pedido à decisão.')
@section('body_class', 'page-home')

@section('content')
<section class="home-hero" aria-labelledby="home-title">
    <div class="home-hero__copy">
        <h1 id="home-title" class="home-hero__title">
            <span class="home-hero__line"><span style="--i: 0">Tudo conecta.</span></span>
            <span class="home-hero__line"><span style="--i: 1">Nada para.</span></span>
        </h1>
        <p class="home-hero__lead">O Nexora EMS conecta gestão, vendas e comércio digital para sua equipe avançar com a mesma informação, do pedido à decisão.</p>
        <div class="home-hero__actions">
            <a href="{{ route('demo') }}" class="btn-primary">Ver a Nexora em ação</a>
            <a href="#ecossistema" class="text-link">Explorar o ecossistema <span aria-hidden="true">↓</span></a>
        </div>
    </div>

    <div class="home-hero__stage" aria-label="Fluxo conectado da plataforma Nexora">
        <div class="brand-orbit" aria-hidden="true">
            <span class="brand-orbit__track"></span>
            <span class="brand-orbit__track brand-orbit__track--inner"></span>
            <span class="brand-orbit__node"></span>
        </div>

        <div class="flow-console" data-ui data-ecosystem>
            <div class="flow-console__topbar">
                <div><span class="flow-console__signal" aria-hidden="true"></span><span>Operação Nexora</span></div>
                <span class="flow-console__sync">Sincronizado agora</span>
            </div>

            <div class="flow-console__tabs" role="tablist" aria-label="Produtos Nexora">
                <button id="flow-tab-erp" type="button" role="tab" aria-selected="true" aria-controls="flow-panel-erp" tabindex="0">ERP</button>
                <button id="flow-tab-fdv" type="button" role="tab" aria-selected="false" aria-controls="flow-panel-fdv" tabindex="-1">Força de vendas</button>
                <button id="flow-tab-commerce" type="button" role="tab" aria-selected="false" aria-controls="flow-panel-commerce" tabindex="-1">E-commerce</button>
            </div>

            <div class="flow-console__panel" id="flow-panel-erp" role="tabpanel" aria-labelledby="flow-tab-erp">
                <div class="flow-console__metric"><span>Pedidos liberados</span><strong>128</strong><small>12 aguardam faturamento</small></div>
                <div class="flow-console__route" aria-label="Fluxo do ERP"><span class="is-complete">Pedido</span><span class="is-active">Estoque</span><span>Fiscal</span><span>Financeiro</span></div>
            </div>
            <div class="flow-console__panel" id="flow-panel-fdv" role="tabpanel" aria-labelledby="flow-tab-fdv" hidden>
                <div class="flow-console__metric"><span>Equipe em rota</span><strong>24</strong><small>86 visitas sincronizadas</small></div>
                <div class="flow-console__route" aria-label="Fluxo da força de vendas"><span class="is-complete">Visita</span><span class="is-active">Pedido</span><span>Estoque</span><span>Comissão</span></div>
            </div>
            <div class="flow-console__panel" id="flow-panel-commerce" role="tabpanel" aria-labelledby="flow-tab-commerce" hidden>
                <div class="flow-console__metric"><span>Pedidos integrados</span><strong>342</strong><small>Estoque atualizado em tempo real</small></div>
                <div class="flow-console__route" aria-label="Fluxo do e-commerce"><span class="is-complete">Catálogo</span><span class="is-active">Pedido</span><span>Estoque</span><span>Expedição</span></div>
            </div>
        </div>
    </div>
</section>

<section class="home-statement" aria-label="O princípio da Nexora">
    <p data-reveal>A informação entra uma vez, atravessa <span class="statement-token">vendas</span>, <span class="statement-token">estoque</span> e <span class="statement-token">financeiro</span>, e chega inteira a quem decide.</p>
</section>

<section id="ecossistema" class="home-ecosystem" aria-labelledby="ecosystem-title">
    <div class="site-container home-ecosystem__layout">
        <div class="home-ecosystem__copy" data-reveal>
            <h2 id="ecosystem-title">Um núcleo.<br>Três frentes.</h2>
            <p>Comece pelo ERP e conecte novos canais no ritmo da operação. Sem duplicar cadastros, refazer conferências ou perder o contexto entre equipes.</p>
            <a href="{{ route('erp') }}" class="text-link text-link--dark">Conhecer o Nexora EMS ERP <span aria-hidden="true">↗</span></a>
        </div>

        <div class="ecosystem-orbit" data-reveal aria-hidden="true">
            <div class="ecosystem-orbit__ring">
                <span class="ecosystem-orbit__core">N</span>
                <span class="ecosystem-orbit__product ecosystem-orbit__product--erp">ERP</span>
                <span class="ecosystem-orbit__product ecosystem-orbit__product--fdv">FDV</span>
                <span class="ecosystem-orbit__product ecosystem-orbit__product--commerce">E-commerce</span>
            </div>
        </div>

        <div class="product-lines" aria-label="Produtos Nexora">
            <a href="{{ route('erp') }}" class="product-line" data-reveal>
                <span class="product-line__name">Nexora EMS ERP</span><span class="product-line__status">Disponível</span>
                <span class="product-line__copy">Mais de 30 módulos e IA contextual para o centro da operação.</span><span class="product-line__arrow" aria-hidden="true">↗</span>
            </a>
            <a href="{{ route('fdv') }}" class="product-line" data-reveal>
                <span class="product-line__name">NexoraFDV</span><span class="product-line__status">Pré-lançamento</span>
                <span class="product-line__copy">Pedidos, visitas, roteiros e CRM — inclusive offline.</span><span class="product-line__arrow" aria-hidden="true">↗</span>
            </a>
            <a href="{{ route('ecommerce') }}" class="product-line" data-reveal>
                <span class="product-line__name">Nexora E-commerce</span><span class="product-line__status">Em desenvolvimento</span>
                <span class="product-line__copy">Catálogo, estoque, pedidos e expedição no mesmo movimento.</span><span class="product-line__arrow" aria-hidden="true">↗</span>
            </a>
        </div>
    </div>
</section>

<section class="capability-bands" aria-label="Capacidades conectadas da plataforma">
    @foreach([
        ['Financeiro e fiscal conversam.', 'Títulos, notas e conciliações no mesmo fluxo.', true],
        ['Estoque acompanha cada venda.', 'Disponibilidade confiável em todos os canais.', false],
        ['A IA entende sua operação.', 'Respostas ancoradas nos dados do próprio negócio.', true],
        ['Sua equipe trabalha sem ilhas.', 'Uma base compartilhada do campo à diretoria.', false],
    ] as [$title, $result, $active])
        <div class="capability-band{{ $active ? ' is-on' : '' }}" data-capability data-reveal>
            <div class="site-container capability-band__inner">
                <div><p>{{ $title }}</p><span class="capability-band__result">{{ $result }}</span></div>
                <button type="button" class="capability-switch" aria-pressed="{{ $active ? 'true' : 'false' }}" aria-label="{{ $active ? 'Desativar' : 'Ativar' }} {{ $title }}"><span></span></button>
            </div>
        </div>
    @endforeach
</section>

<section class="home-cta" aria-labelledby="cta-title">
    <div class="site-container home-cta__layout">
        <div class="home-cta__copy" data-reveal>
            <h2 id="cta-title">Coloque tudo<br>em movimento.</h2>
            <p>Uma demonstração objetiva, guiada pelos processos que hoje consomem mais tempo da sua equipe.</p>
        </div>
        <div class="demo-brief" data-ui data-reveal>
            <span>Próximo passo</span>
            <h3>Por onde sua operação começa?</h3>
            <div class="demo-brief__options" role="group" aria-label="Área de maior interesse">
                <a href="{{ route('demo', ['interesse' => 'gestao']) }}">Gestão</a>
                <a href="{{ route('demo', ['interesse' => 'vendas']) }}">Vendas</a>
                <a href="{{ route('demo', ['interesse' => 'ecommerce']) }}">E-commerce</a>
            </div>
            <a href="{{ route('demo') }}" class="demo-brief__action">Agendar demonstração <span aria-hidden="true">↗</span></a>
        </div>
    </div>
</section>
@endsection
