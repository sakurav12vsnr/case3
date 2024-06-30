@extends('layouts.app')

@section('main')
<div class="main">
    <div class="mypage__item__img">
        <img class="mypage-image" src="images/{{$user->img_url}}" alt="ユーザー画像" />
        @if( Auth::check() )
        <p class="welcome">
            {{$user->name}}
        </p>
        @endif
        <input type="button" onclick="location.href='/mypage/profile'" value="プロフィールを編集" />
    </div>
    <div class="mypage__tab-name">
        <ul class="mypage__tab-group">
            <li class="tab tab1 is-active">出品した商品</li>
            <li class="tab tab2">購入した商品</li>
        </ul>
    </div>
    <div class="mypage__panel-area">
        <div class="panel tab1 is-show">
            <div class="mypage-card">
            @foreach($user->items as $item)
                <img class="item-card__img"  alt="商品画像" height="200px" />
                <div class="item-card__content">
                    <a class="shop-card__content__link" href="/item/{{$item->pivot->id}}">{{$item->pivot->name}}</a>
                    <p class="shop-card__content__txt">
                        <span>¥</span>{{$item->pivot->price}}
                    </p>
                </div>
            @endforeach
            </div>
        </div>
        <div class="panel tab2">
            Panel2
        </div>
    </div>
</div>
@endsection