<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>COACHTECH</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/index.js') }}"></script>
    <script src="{{ asset('js/sell.js') }}"></script>
    <script src="{{ asset('"></script>
</head>

<body class="container">
    @component('components.header')
    @endcomponent
    <main class="main">
        @yield('main')
    </main>
</body>

</html>