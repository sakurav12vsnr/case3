@extends('layouts.app')

@section('main')
<h2 class="main-ttl">ログイン</h2>
<form action="/login" method="post">
    @csrf
    <div class="login-form">
        <div class="login-form__content">
            <div class="form-ttl">
                メールアドレス
            </div>
            <div class="form-content">
                <input type="email" name="email" value="{{ old('email') }}" />
            </div>
        </div>
        <div class="login-form__content">
            <div class="form-ttl">
                パスワード
            </div>
            <div class="form-content">
                <input type="password" name="password">
            </div>
        </div>
        <div class="btn-container">
            
        </div>

    </div>
</form>