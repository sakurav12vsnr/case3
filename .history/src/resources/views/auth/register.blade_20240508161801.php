@extends('layouts.app')

@section('main')
@if (session('result'))
<div class="flash_message">
    {{ session('result') }}
</div>
@endif
<h2 class="main-ttl">会員登録</h2>
<form action="/register" method="post">
    @csrf
    <div class="register-form__content">
        <div class="form-ttl">メールアドレス</div>
            <input type="text" name="email" value="{{ old>
    </div>
</form>