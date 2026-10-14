<footer class="home-footer">
    <div class="site-container">
        <a href="{{ route('home') }}" class="home-footer__mark" aria-label="Nexora — início">
            <img src="{{ asset('images/LogoNexora-clean.png') }}" alt="Nexora" width="1944" height="809" loading="lazy">
        </a>
        <div class="home-footer__grid">
            <p>Enterprise Intelligence Platform.<br>Feita para operações que não param.</p>
            <nav class="home-footer__links" aria-label="Navegação do rodapé">
                <a href="{{ route('erp') }}">ERP</a>
                <a href="{{ route('fdv') }}">Força de Vendas</a>
                <a href="{{ route('ecommerce') }}">E-commerce</a>
                <a href="{{ route('sobre') }}">Sobre</a>
                <a href="{{ route('contato') }}">Contato</a>
            </nav>
            <span class="home-footer__meta">&copy; {{ date('Y') }} Nexora</span>
        </div>
    </div>
</footer>
