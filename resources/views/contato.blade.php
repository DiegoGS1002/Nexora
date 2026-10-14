@extends('layouts.app')
@section('title', 'Contato — Nexora')
@section('meta_description', 'Converse com a equipe Nexora sobre sua operação, produtos ou demonstração.')
@section('body_class', 'page-inner page-contact')

@section('content')
<section class="contact-page" aria-labelledby="contact-title">
    <div class="contact-page__intro">
        <h1 id="contact-title">Conecte a<br>conversa.</h1>
        <p>Fale com a equipe sobre sua operação, nossos produtos ou uma demonstração.</p>
        <div class="contact-channels">
            <a href="mailto:diegoaugusto.garciaa@gmail.com"><span>E-mail</span><strong>diegoaugusto.garciaa@gmail.com</strong><b aria-hidden="true">↗</b></a>
            <a href="https://wa.me/5532984502345" target="_blank" rel="noopener"><span>WhatsApp</span><strong>(32) 98450-2345</strong><b aria-hidden="true">↗</b></a>
            <div><span>Atendimento</span><strong>Brasil</strong></div>
        </div>
    </div>
    <div class="contact-page__form" data-ui>
        <div class="contact-orbit" aria-hidden="true"><span></span><i></i></div>
        <div class="contact-form-card" data-reveal>
            <h2>Envie uma mensagem.</h2>
            <p>Conte brevemente como podemos ajudar.</p>
            @if(session('success'))<p class="form-success" role="status">{{ session('success') }}</p>@endif
            <form action="{{ route('contato.store') }}" method="POST" class="nexora-form">
                @csrf
                <div class="field"><label for="contato-nome">Nome</label><input id="contato-nome" type="text" name="nome" required class="form-input" autocomplete="name"></div>
                <div class="field"><label for="contato-email">E-mail</label><input id="contato-email" type="email" name="email" required class="form-input" autocomplete="email"></div>
                <div class="field"><label for="contato-mensagem">Como podemos ajudar?</label><textarea id="contato-mensagem" name="mensagem" required rows="5" class="form-input"></textarea></div>
                <button type="submit" class="btn-primary">Enviar mensagem <span aria-hidden="true">↗</span></button>
            </form>
        </div>
    </div>
</section>
@endsection
