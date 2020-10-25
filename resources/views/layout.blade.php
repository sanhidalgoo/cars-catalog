<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Por defecto')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<style>
    .active a {
        color: red;
        text-decoration: none;
    }

</style>

<body>
    @include('partials/nav')
    @include('partials.session-status')
    @yield('content')
</body>

</html>