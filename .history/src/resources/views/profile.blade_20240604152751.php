@extends('layouts.app')

@section('main')
<h2 class="main-ttl">プロフィール設定</h2>
<form action="/profile" method="POST">
    @csrf
    <div class="profile">
        <img class="user-inf__img" src="images/User image.png" alt="ユーザー画像" />
    </div>
</form>