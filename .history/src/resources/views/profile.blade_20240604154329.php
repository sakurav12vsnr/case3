@extends('layouts.app')

@section('main')
<h2 class="main-ttl">プロフィール設定</h2>
<form action="/profile" method="POST">
    @csrf
    <div class="user-inf">
        <div class="user-inf__item">
            <img class="user-inf__item__img" src="images/User image.png" alt="ユーザー画像" />
            <input type="file" value="画像を選択する" />
        </div>
        <div class="user-inf__item">
            <div class="inf-ttl">
                ユーザー名
            </div>
            <div class="inf-content">
                <input type="text">
            </div>
        </div>
    </div>
</form>