@extends('layouts.app')
@section('title', 'Sobre a Nexora')
@section('content')

{{-- HERO --}}
<section class="relative pt-40 pb-24 hero-glow grid-overlay overflow-hidden">
    <div class="absolute top-1/3 left-1/2 -translate-x-1/2 w-[700px] h-[400px] bg-blue-600/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
        <div class="badge mb-6 mx-auto">Sobre a Nexora</div>
        <h1 class="font-display font-bold text-5xl md:text-6xl text-white mb-8 leading-tight">
            Redefinindo como empresas<br><span class="gradient-text">operam, vendem e crescem</span>
        </h1>
        <p class="text-slate-300 text-xl leading-relaxed max-w-2xl mx-auto">
            Acreditamos que tecnologia empresarial não deve ser fragmentada, complexa ou restrita a grandes corporações.
            Deve ser inteligente, integrada e acessível para negócios que querem evoluir.
        </p>
    </div>
</section>

{{-- ORIGEM --}}
<section class="py-24 bg-[#020617]">
    <div class="max-w-5xl mx-auto px-6">
        <div class="section-divider mb-20"></div>
        <div class="grid md:grid-cols-2 gap-16 items-center reveal">
            <div>
                <div class="badge mb-4">Nossa origem</div>
                <h2 class="font-display font-bold text-3xl text-white mb-6">Um ecossistema pensado para crescimento</h2>
                <p class="text-slate-300 leading-relaxed mb-5">
                    Foi com essa visão que criamos a <span class="text-white font-semibold">Nexora Platform</span> — um ecossistema onde ERP, Força de Vendas e E-commerce funcionam como uma única plataforma conectada.
                </p>
                <p class="text-slate-300 leading-relaxed">
                    Unimos gestão operacional, inteligência comercial e expansão digital em um ambiente construído para eliminar silos, automatizar processos e transformar dados em decisões.
                </p>
            </div>
            <div class="space-y-4">
                @foreach([
                    ['⚙️', 'Operação', 'Controle financeiro, estoque, compras, fiscal, processos e gestão estratégica com o Nexora EMS ERP.'],
                    ['📈', 'Vendas', 'Potencialize equipes comerciais com mobilidade, CRM, metas, pedidos, visitas em campo, roteiros e sync offline com o NexoraFDV.'],
                ] as [$icon, $title, $desc])
                <div class="glass-card p-6 flex gap-5 reveal">
                    <span class="text-3xl">{{ $icon }}</span>
                    <div>
                        <h3 class="font-display font-semibold text-white mb-1">{{ $title }}</h3>
                        <p class="text-slate-400 text-sm leading-relaxed">{{ $desc }}</p>
                    </div>
                </div>
                @endforeach
                <p class="text-cyan-400 font-semibold text-sm text-right pt-2">Tudo em um único ecossistema.</p>
            </div>
        </div>
    </div>
</section>

{{-- MISSÃO & VISÃO --}}
<section class="py-24">
    <div class="max-w-5xl mx-auto px-6">
        <div class="section-divider mb-20"></div>
        <div class="grid md:grid-cols-2 gap-10">
            <div class="glass-card p-10 reveal">
                <div class="w-12 h-12 rounded-xl bg-blue-500/15 border border-blue-500/30 flex items-center justify-center text-2xl mb-6">🎯</div>
                <h2 class="font-display font-bold text-2xl text-white mb-4">Nossa missão</h2>
                <p class="text-slate-300 leading-relaxed">
                    Democratizar o acesso à tecnologia enterprise, entregando soluções inteligentes para que empresas operem com mais eficiência, vendam com mais estratégia e cresçam com mais escala.
                </p>
            </div>
            <div class="glass-card p-10 reveal">
                <div class="w-12 h-12 rounded-xl bg-cyan-500/15 border border-cyan-500/30 flex items-center justify-center text-2xl mb-6">🔭</div>
                <h2 class="font-display font-bold text-2xl text-white mb-4">Nossa visão</h2>
                <p class="text-slate-300 leading-relaxed">
                    Construir a nova geração de plataformas de inteligência empresarial — conectando operações, pessoas e dados em um único ecossistema preparado para o futuro.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- VALORES --}}
<section class="py-24 bg-[#020617]">
    <div class="max-w-5xl mx-auto px-6">
        <div class="section-divider mb-20"></div>
        <div class="text-center mb-14 reveal">
            <div class="badge mb-4">No que acreditamos</div>
            <h2 class="font-display font-bold text-4xl text-white">Os princípios que nos guiam</h2>
        </div>
        <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-6">
            @foreach([
                ['🔗', 'Integração real', 'Não sistemas isolados — um ecossistema conectado de verdade.'],
                ['🤖', 'Inteligência aplicada', 'Não apenas automação — IA que resolve problemas reais.'],
                ['🚀', 'Tecnologia como motor', 'Crescimento empresarial impulsionado por software de alta performance.'],
                ['📦', 'Produtos escaláveis', 'Modulares, flexíveis e preparados para o futuro.'],
            ] as [$icon, $title, $desc])
            <div class="glass-card p-7 text-center reveal">
                <div class="text-4xl mb-4">{{ $icon }}</div>
                <h3 class="font-display font-semibold text-white mb-2">{{ $title }}</h3>
                <p class="text-slate-400 text-sm leading-relaxed">{{ $desc }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- FECHAMENTO / CTA --}}
<section class="py-28 text-center">
    <div class="max-w-2xl mx-auto px-6 reveal">
        <p class="text-slate-400 text-lg mb-4">Mais do que software.</p>
        <h2 class="font-display font-bold text-4xl md:text-5xl text-white mb-6">
            Um ecossistema para <span class="gradient-text">evolução empresarial</span>
        </h2>
        <p class="text-slate-300 mb-10 text-lg leading-relaxed">
            Nexora — <span class="text-white font-semibold">Operate. Sell. Scale.</span>
        </p>
        <div class="flex gap-4 justify-center flex-wrap">
            <a href="{{ route('demo') }}" class="btn-primary">Agendar Demo</a>
            <a href="{{ route('contato') }}" class="btn-secondary">Falar conosco</a>
        </div>
    </div>
</section>

@endsection
