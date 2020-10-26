<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Car Catalog')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js" defer></script>
</head>
<style>


</style>

<body>
    <div id="app" class="d-flex flex-column h-screen justify-content-between">
        <header>
            @include('partials/nav')
            @include('partials.session-status')
        </header>

        <main>
            @yield('content')
        </main>

        <footer class="bg-white text-center text-black-50 py-3 shadow">
            {{ config('app.name') }} | Copyrigth {{ date('Y') }}
        </footer>
    </div>
</body>

</html>
