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
    <div class="tab-name">
        <ul class="tab-group">
            <li class="tab tab1 is-active">おすすめ</li>
            <li class="tab tab2">マイリスト</li>
        </ul>
    </div>
    <div class="panel-area">
        <div class="panel tab1 is-show">
            Panel1
        </div>
        <div class="panel tab2">
            Panel2
        </div>
    </div>
</div>