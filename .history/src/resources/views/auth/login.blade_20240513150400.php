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
            <div class="form-content"></div>
        </div>

    </div>
</form>