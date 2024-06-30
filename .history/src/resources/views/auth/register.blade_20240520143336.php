@extends('layouts.app')

@section('main')
<h2 class="main-ttl">会員登録</h2>
<form action="/register" method="post">
    @csrf
    <div class="register-form">
        <div class="register-form__content">
            <label for="email">
                メールアドレス
            </label>
            <input type="email" name="email" value="{{ old('email') }}" />
        </div>
        <div class="register-form__content">
            <label for="password">
                パスワード
            </label>
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