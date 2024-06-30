@extends('layouts.app')

@section('main')
<h2 class="main-ttl">ログイン</h2>
<form action="/login" method="post">
    @csrf
    <div class="input-container">
        
    </div>
</form>