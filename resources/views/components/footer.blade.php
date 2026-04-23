<footer class="border-t border-[#1E293B] bg-[#020617] pt-16 pb-8 mt-24">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mb-12">
            {{-- Brand --}}
            <div class="md:col-span-1">
                <a href="{{ route('home') }}" class="flex items-center gap-3 mb-4">
                    <img src="{{ asset('images/LogoNexora.png') }}" alt="Nexora" class="h-8 w-auto">
                    <span class="font-display font-bold text-white">Nexora</span>
                </a>
                <p class="text-slate-400 text-sm leading-relaxed">
                    Enterprise Intelligence Platform.<br>
                    Gestão, vendas e comércio digital<br>em uma única plataforma.
                </p>
            </div>
            {{-- Produtos --}}
            <div>
                <h4 class="font-display font-semibold text-white mb-4">Produtos</h4>
                <ul class="space-y-2 text-sm text-slate-400">
                    <li><a href="{{ route('erp') }}"       class="hover:text-cyan-400 transition-colors">Nexora EMS ERP</a></li>
                    <li><a href="{{ route('fdv') }}"       class="hover:text-cyan-400 transition-colors">Força de Vendas Nexora</a></li>
                    <li><a href="{{ route('ecommerce') }}" class="hover:text-cyan-400 transition-colors">Nexora E-commerce</a></li>
                </ul>
            </div>
            {{-- Empresa --}}
            <div>
                <h4 class="font-display font-semibold text-white mb-4">Empresa</h4>
                <ul class="space-y-2 text-sm text-slate-400">
                    <li><a href="{{ route('sobre') }}"   class="hover:text-cyan-400 transition-colors">Sobre</a></li>
                    <li><a href="{{ route('contato') }}" class="hover:text-cyan-400 transition-colors">Contato</a></li>
                    <li><a href="{{ route('demo') }}"    class="hover:text-cyan-400 transition-colors">Solicitar Demo</a></li>
                </ul>
            </div>
            {{-- CTA --}}
            <div>
                <h4 class="font-display font-semibold text-white mb-4">Comece agora</h4>
                <p class="text-slate-400 text-sm mb-4">Veja a Nexora em ação com uma demonstração personalizada.</p>
                <a href="{{ route('demo') }}" class="btn-primary text-sm">Agendar Demo</a>
            </div>
        </div>
        <div class="section-divider mb-6"></div>
        <div class="flex flex-col md:flex-row items-center justify-between gap-3 text-slate-500 text-xs">
            <span>&copy; {{ date('Y') }} Nexora. Todos os direitos reservados.</span>
            <span class="badge">Enterprise Intelligence Platform</span>
        </div>
    </div>
</footer>
