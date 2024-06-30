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
        <header class="register-header">
            <img class="header__logo" src="/images/CoachTech.png" alt="COACHTECH" width="370px" height="36px"></img>
        </header>
    </div>
    <div class="main">
        <h2 class="main-ttl">ログイン</h2>
        <form action="/login" method="POST">
            @csrf
            <div class="login-form">
                <div class="login-form__content">
                    <div class="form-ttl">
                        メールアドレス
                    </div>
                    <div class="form__content">
                        <input type="email" name="email" value="{{ old('email') }}" />
                    </div>
                </div>
                <div class="login-form__content">
                    <div class="form-ttl">
                        パスワード
                    </div>
                    <div class="form__content">
                        <input type="password" name="password">
                    </div>
                </div>
                <div class="btn-container">
                    <input type="submit" value="ログイン" />
                </div>
        </div>
    </form>
    <a class="transition-link" href="/register">
    会員登録はこちら
    </a>
</div>
@endsection