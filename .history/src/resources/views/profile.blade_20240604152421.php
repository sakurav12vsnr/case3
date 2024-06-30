@extends('layouts.app')

@section('main')
<h2 class="main-ttl">プロフィール設定</h2>
<form action="/profile" method="POST">
    @csrf
    <div class="user-inf">
        <img class="user-inf__img" src="images/" alt="Item image">
    </div>
</form>