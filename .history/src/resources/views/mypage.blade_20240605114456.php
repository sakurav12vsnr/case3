@extends('layouts.app')

@section('main')
<div class="main">
    <div class="mypage__item__img">
        <img class="mypage-image" src="images/UserImage.png" alt="ユーザー画像" />
        @if( Auth::check() )
        <p class="welcome">
            ユーザー名
        </p>
        @endif
        <input type="button" onclick="location.href='/profile'" value="プロフィールを編集" />
    </div>
    <div class="mypage__tab-name">
        <ul class="mypage__tab-group">
            <li class="tab tab1 is-active">出品した商品</li>
            <li class="tab tab2">購入した商品</li>
        </ul>
    </div>
    <div class="mypage__panel-area">
        <div class="mypage-panel tab1 is-show">
            Panel1
        </div>
        <div class="mypage-panel tab2">
            Panel2
        </div>
    </div>
</div>
@endsection