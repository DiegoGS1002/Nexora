@extends('layouts.app')
@section('title', 'Agendar Demonstração — Nexora')
@section('content')
<section class="relative min-h-screen flex items-center hero-glow grid-overlay pt-20">
    <div class="max-w-6xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-16 items-center">
        <div class="reveal">
            <div class="badge mb-6">Demonstração gratuita</div>
            <h1 class="font-display font-bold text-5xl text-white mb-6">
                Veja a Nexora<br><span class="gradient-text">em ação</span>
            </h1>
            <p class="text-slate-300 text-lg mb-8">
                Agende uma demo personalizada e descubra como a Nexora pode transformar sua operação.
            </p>
            <ul class="space-y-3">
                @foreach([
                    '30 minutos, online e sem compromisso',
                    'Demonstração focada no seu segmento',
                    'Resposta em menos de 24 horas',
                ] as $item)
                <li class="flex items-center gap-3 text-slate-300 text-sm">
                    <span class="text-cyan-400">✓</span> {{ $item }}
                </li>
                @endforeach
            </ul>
        </div>
        <div class="glass-card p-8 reveal">
            <h2 class="font-display font-bold text-xl text-white mb-6">Preencha para agendar</h2>
            @if(session('success'))
            <div class="mb-6 p-4 rounded-xl bg-green-500/10 border border-green-500/25 text-green-400 text-sm text-center">
                {{ session('success') }}
            </div>
            @endif
            <form action="{{ route('demo.store') }}" method="POST" class="space-y-4">
                @csrf
                <div class="grid grid-cols-2 gap-4">
                    <input type="text" name="nome" required class="form-input" placeholder="Nome *">
                    <input type="text" name="empresa" required class="form-input" placeholder="Empresa *">
                </div>
                <input type="text" name="whatsapp" required class="form-input" placeholder="WhatsApp *">
                <select name="segmento" required class="form-input">
                    <option value="">Segmento *</option>
                    <option>Indústria</option><option>Distribuidora</option>
                    <option>Varejo</option><option>Serviços</option>
                </select>
                <select name="interesse" required class="form-input">
                    <option value="">Interesse *</option>
                    <option>ERP</option><option>Força de Vendas</option>
                    <option>E-commerce</option><option>Plataforma completa</option>
                </select>
                <button type="submit" class="btn-primary w-full justify-center pulse-glow">Agendar demonstração</button>
            </form>
        </div>
    </div>
</section>
@endsection
