@extends('layouts.app')

@section('main')
<h2 class="main-ttl">プロフィール設定</h2>
<form action="/profile" method="POST">
    @csrf
    <div class="user-inf">
        <div class="user-inf__item">
            <img class="user-inf__item__img" src="images/User image.png" alt="ユーザー画像" />
            <input
    </div>
</form>