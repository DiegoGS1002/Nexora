@extends('layouts.app')
@section('title', 'Sobre a Nexora')
@section('content')
<section class="relative pt-40 pb-24 hero-glow grid-overlay">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <div class="badge mb-6 mx-auto">Nossa história</div>
        <h1 class="font-display font-bold text-5xl md:text-6xl text-white mb-8">
            Tecnologia enterprise,<br><span class="gradient-text">feita para o Brasil</span>
        </h1>
        <p class="text-slate-300 text-xl leading-relaxed max-w-2xl mx-auto">
            A Nexora desenvolve software empresarial moderno com foco em automação, inteligência e integração.
        </p>
    </div>
</section>
<section class="py-24 bg-[#020617]">
    <div class="max-w-5xl mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-12 items-start">
            <div class="reveal">
                <h2 class="font-display font-bold text-3xl text-white mb-6">Nossa missão</h2>
                <p class="text-slate-300 leading-relaxed mb-5">
                    Acreditamos que toda empresa merece acesso a ferramentas de gestão enterprise, com IA real e integração verdadeira.
                </p>
                <p class="text-slate-300 leading-relaxed">
                    Por isso construímos a Nexora Platform: um ecossistema onde ERP, FDV e E-commerce operam como um único sistema.
                </p>
            </div>
            <div class="space-y-4 reveal">
                @foreach([
                    ['🎯','Foco em resultado','Cada módulo gera eficiência operacional mensurável.'],
                    ['🤖','IA com propósito','Automação que resolve problemas reais.'],
                    ['🔗','Integração real','Tudo no mesmo core, em tempo real.'],
                ] as [$icon,$title,$desc])
                <div class="glass-card p-6 flex gap-5">
                    <span class="text-3xl">{{ $icon }}</span>
                    <div>
                        <h3 class="font-display font-semibold text-white mb-1">{{ $title }}</h3>
                        <p class="text-slate-400 text-sm">{{ $desc }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="py-20 text-center">
    <div class="max-w-xl mx-auto px-6 reveal">
        <h2 class="font-display font-bold text-3xl text-white mb-6">Conheça a plataforma</h2>
        <div class="flex gap-4 justify-center">
            <a href="{{ route('demo') }}" class="btn-primary">Agendar Demo</a>
            <a href="{{ route('contato') }}" class="btn-secondary">Falar conosco</a>
        </div>
    </div>
</section>
@endsection
