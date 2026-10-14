<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Nexora — ERP, Frente de Vendas e E-commerce integrados para escalar operações empresariais.')">
    <meta name="theme-color" content="#050A14">
    <title>@yield('title', 'Nexora') | Enterprise Intelligence Platform</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Space+Grotesk:wght@500;600&display=swap" rel="stylesheet">
    <script>document.documentElement.classList.add('js')</script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('head')
</head>
<body class="@yield('body_class')">
    <a href="#main-content" class="skip-link">Pular para o conteúdo</a>
    @include('components.navbar')

    <main id="main-content">@yield('content')</main>

    @include('components.footer')

    @stack('scripts')
</body>
</html>

