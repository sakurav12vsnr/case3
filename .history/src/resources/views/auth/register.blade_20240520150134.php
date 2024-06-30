@extends('layouts.app')

@section('main')
<h2 class="main-ttl">会員登録</h2>
<form action="/register" method="post">
    @csrf
    <div class="register-form">
        <div class="register-form__content">
            <p class="form-ttl">
                メールアドレス
            </p>
            <div class="form-content">
                <input type="email" name="email" value="{{ old('email') }}" />
            </div>
        </div>
        <div class="register-form__content">
            <p class="form-ttl">
                パスワード
            </p>
            <div class="form-content">
                <input type="password" name="password" />
            </div>
        </div>
        <div class="btn-container">
            <input type="submit" value="登録する" />
        </div>
    </div>
</form>
<a class="transition-link" href="/login">
    ログインはこちら
</a>
@endsection