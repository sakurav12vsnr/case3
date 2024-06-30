@extends('layouts.app')

@section('main')
<h2 class="main-ttl">会員登録</h2>
<form action="/register" method="post">
    @csrf
    <div class="register-form__content">
        <div class="form-ttl">メールアドレス</div>
            <div class="form-content">
            <input type="text" name="email" value="{{ old('name') }}" />
        <div class="register-form__content></div>
    </div>
</form>