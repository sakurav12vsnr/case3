@extends('layouts.app')

@section('main')
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
@endsection