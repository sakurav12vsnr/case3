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
    <div class=></div>
</form>