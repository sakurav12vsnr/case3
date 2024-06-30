@extends('layouts.app')

@section('main')
<div class="main">
    <div class="user-inf__item__img">
        <img class="user-image" src="images/UserImage.png" alt="ユーザー画像" />
        @if( Auth::check() )
        <p class="welcome">
            ユーザー名
        </p>
        @endif
        <input type="button" value="プロフィールを編集" />
    </div>
    
</div>