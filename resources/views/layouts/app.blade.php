<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Nexora — ERP, Frente de Vendas e E-commerce integrados para escalar operações empresariais.')">
    <title>@yield('title', 'Nexora') | Enterprise Intelligence Platform</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('head')
</head>
<body>
    @include('components.navbar')

    <main>@yield('content')</main>

    @include('components.footer')

    @stack('scripts')
</body>
</html>

