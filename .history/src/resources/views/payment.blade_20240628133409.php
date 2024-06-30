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
</head>

<body class="container">
    <header class="header">
        <a href="/"><img class="header__logo" src="/images/CoachTech.png" alt="COACHTECH" width="370px" height="36px"></img></a>
        <x-search />
        <x-navigation />
    </header>
    <div class="payment">
        <option value=""></option>
    </div>