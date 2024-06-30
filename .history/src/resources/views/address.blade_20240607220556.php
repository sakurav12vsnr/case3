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
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>

<body>
    <div class="container">
        <header class="header"></header>
    </div>
    <div class="main">
        <h2 class="main-ttl">住所の変更</h2>
        <form action="/purchase/address" method="POST">
            @csrf
            <div class="address">
                <div class="address-form__content">
                    <div class="address-form-ttl">
                    メールアドレス
                </div>
                <div class="form__content">
                    <input type="email" name="email" value="{{ old('email') }}" />
                </div>
            </div>
            @error('email')
            <div class="error">
                {{ $message }}
            </div>
            @enderror
            <div class="register-form__content">
                <div class="form-ttl">
                    パスワード
                </div>
                <div class="form__content">
                    <input type="password" name="password" />
                </div>
            </div>
    </div>
</body>