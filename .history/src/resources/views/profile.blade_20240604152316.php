@extends('layouts.app')

@section('main')
<h2 class="main-ttl">プロフィール設定</h2>
<form action="/profile" method="POST">
    @csrf
    <div class="user-i">
        <img class=""src="" alt="">
    </div>
</form>