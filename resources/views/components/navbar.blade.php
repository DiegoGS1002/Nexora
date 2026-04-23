<nav class="navbar">
    <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">
        {{-- Logo --}}
        <a href="{{ route('home') }}" class="flex items-center gap-3">
            <img src="{{ asset('images/LogoNexora.png') }}"
                 alt="Nexora Logo"
                 class="h-8 w-auto">
            <span class="font-display font-bold text-lg tracking-tight text-white hidden sm:block">Nexora</span>
        </a>
        {{-- Desktop nav --}}
        <div class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-300">
            <a href="{{ route('erp') }}"       class="hover:text-cyan-400 transition-colors">ERP</a>
            <a href="{{ route('fdv') }}"       class="hover:text-cyan-400 transition-colors">Força de Vendas</a>
            <a href="{{ route('ecommerce') }}" class="hover:text-cyan-400 transition-colors">E-commerce</a>
            <a href="{{ route('sobre') }}"     class="hover:text-cyan-400 transition-colors">Sobre</a>
            <a href="{{ route('contato') }}"   class="hover:text-cyan-400 transition-colors">Contato</a>
        </div>
        {{-- CTA --}}
        <div class="hidden md:flex items-center gap-3">
            <a href="{{ route('demo') }}" class="btn-primary text-sm py-2.5 px-5">
                Solicitar Demo
            </a>
        </div>
        {{-- Mobile burger --}}
        <button id="menu-toggle"
                class="md:hidden text-slate-300 hover:text-white transition-colors"
                aria-label="Abrir menu">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
            </svg>
        </button>
    </div>
    {{-- Mobile menu --}}
    <div id="mobile-menu"
         class="hidden md:hidden border-t border-slate-800 bg-[#020617] px-6 pb-5 pt-3">
        <div class="flex flex-col gap-4 text-sm font-medium text-slate-300">
            <a href="{{ route('erp') }}"       class="hover:text-cyan-400">ERP</a>
            <a href="{{ route('fdv') }}"       class="hover:text-cyan-400">Força de Vendas</a>
            <a href="{{ route('ecommerce') }}" class="hover:text-cyan-400">E-commerce</a>
            <a href="{{ route('sobre') }}"     class="hover:text-cyan-400">Sobre</a>
            <a href="{{ route('contato') }}"   class="hover:text-cyan-400">Contato</a>
            <a href="{{ route('demo') }}"      class="btn-primary text-center mt-2">Solicitar Demo</a>
        </div>
    </div>
</nav>
