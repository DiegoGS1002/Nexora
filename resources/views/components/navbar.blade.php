<nav class="navbar" aria-label="Navegação principal">
    <div class="navbar__inner">
        <a href="{{ route('home') }}" class="navbar__brand" aria-label="Nexora — início">
            <img src="{{ asset('images/LogoNexora-clean.png') }}" alt="Nexora" width="1944" height="809" fetchpriority="high">
        </a>
        <div class="navbar__links">
            <a href="{{ route('erp') }}" @if(request()->routeIs('erp')) aria-current="page" @endif>ERP</a>
            <a href="{{ route('fdv') }}" @if(request()->routeIs('fdv')) aria-current="page" @endif>Força de Vendas</a>
            <a href="{{ route('ecommerce') }}" @if(request()->routeIs('ecommerce')) aria-current="page" @endif>E-commerce</a>
            <a href="{{ route('sobre') }}" @if(request()->routeIs('sobre')) aria-current="page" @endif>Sobre</a>
            <a href="{{ route('contato') }}" @if(request()->routeIs('contato')) aria-current="page" @endif>Contato</a>
        </div>
        <a href="{{ route('demo') }}" class="navbar__cta">Solicitar demo <span aria-hidden="true">↗</span></a>
        <button id="menu-toggle" type="button" class="navbar__toggle" aria-label="Abrir menu" aria-expanded="false" aria-controls="mobile-menu">
            <span></span><span></span>
        </button>
    </div>
    <div id="mobile-menu" class="navbar__mobile hidden">
        <a href="{{ route('erp') }}">ERP</a>
        <a href="{{ route('fdv') }}">Força de Vendas</a>
        <a href="{{ route('ecommerce') }}">E-commerce</a>
        <a href="{{ route('sobre') }}">Sobre</a>
        <a href="{{ route('contato') }}">Contato</a>
        <a href="{{ route('demo') }}" class="btn-primary">Solicitar demo</a>
    </div>
</nav>
