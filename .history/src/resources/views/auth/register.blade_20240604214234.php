@extends('layouts.app')

@section('main')
<div class="main">
    <h2 class="main-ttl">会員登録</h2>
    <form action="/register" method="POST">
        @csrf
        <div class="register-form">
            <div class="register-form__content">
                <div class="form-ttl">
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
        @error('password')
        <div class="error">
            {{ $message }}
        </div>
        @enderror
        <div class="btn-container">
            <input type="submit" value="登録する" />
        </div>
    </div>
</form>
<a class="transition-link" href="/login">
    ログインはこちら
</a>
@endsection