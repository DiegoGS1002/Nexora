@extends('layouts.app')
@section('title', 'Agendar demonstração — Nexora')
@section('meta_description', 'Agende uma demonstração personalizada da plataforma Nexora.')
@section('body_class', 'page-inner page-demo')

@section('content')
<section class="form-page" aria-labelledby="demo-title">
    <div class="form-page__intro">
        <div class="form-page__orbit" aria-hidden="true"><span></span><i></i></div>
        <div>
            <h1 id="demo-title">Seu fluxo.<br>Em movimento.</h1>
            <p>Em 30 minutos, mostramos a Nexora a partir dos processos que hoje mais exigem da sua equipe.</p>
            <ul><li>Demonstração online e sem compromisso</li><li>Conversa focada no seu segmento</li><li>Retorno em até um dia útil</li></ul>
            <a href="https://wa.me/5532984502345?text={{ urlencode('Olá! Gostaria de agendar uma demonstração da Nexora.') }}" target="_blank" rel="noopener" class="form-page__whatsapp">Prefere WhatsApp? Fale agora <span aria-hidden="true">↗</span></a>
        </div>
    </div>
    <div class="form-page__panel" data-ui>
        <div class="form-page__panel-inner" data-reveal>
            <h2>Conte sobre sua operação.</h2>
            <p>Preencha os dados e entraremos em contato.</p>
            @if(session('success'))<p class="form-success" role="status">{{ session('success') }}</p>@endif
            <form action="{{ route('demo.store') }}" method="POST" class="nexora-form">
                @csrf
                <div class="form-grid">
                    <div class="field"><label for="demo-nome">Nome</label><input id="demo-nome" type="text" name="nome" required class="form-input" autocomplete="name"></div>
                    <div class="field"><label for="demo-empresa">Empresa</label><input id="demo-empresa" type="text" name="empresa" required class="form-input" autocomplete="organization"></div>
                </div>
                <div class="field"><label for="demo-whatsapp">WhatsApp</label><input id="demo-whatsapp" type="tel" name="whatsapp" required class="form-input" autocomplete="tel"></div>
                <div class="field"><label for="demo-segmento">Segmento</label><select id="demo-segmento" name="segmento" required class="form-input"><option value="">Selecione</option><option>Indústria</option><option>Distribuidora</option><option>Varejo</option><option>Serviços</option></select></div>
                <div class="field"><label for="demo-interesse">O que você quer conectar?</label><select id="demo-interesse" name="interesse" required class="form-input"><option value="">Selecione</option><option @selected(in_array(request('interesse'), ['ERP', 'gestao']))>ERP</option><option @selected(in_array(request('interesse'), ['vendas', 'Força de Vendas']))>Força de Vendas</option><option @selected(in_array(request('interesse'), ['ecommerce', 'E-commerce']))>E-commerce</option><option>Plataforma completa</option></select></div>
                <button type="submit" class="btn-primary">Agendar demonstração <span aria-hidden="true">↗</span></button>
            </form>
        </div>
    </div>
</section>
@endsection
