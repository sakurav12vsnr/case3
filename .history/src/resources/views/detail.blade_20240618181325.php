<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>COACHTECH</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>

<body>
    <div class="container">
        <header class="header">
            <img class="header__logo" src="/images/CoachTech.png" alt="COACHTECH" width="370px" height="36px"></img>
            <x-search />
            <x-navigation />
        </header>
    </div>
<div class="detail">
    <div class="item-detail__img">
        <img class="item__img" src="/images/{{!! $item->img_url !!}}" alt="商品画像" height= "400px" />
    </div>
    <div class="item-detail">
        <div class="item-detail__content">
            <h2 class="item-ttl">{{$item->name}}</h2>
            <div class="brand-name">
                ブランド名
            </div>
            <div class="price">
                <span>¥</span>{{$item->price}}(値段)
            </div>
            <form class="likes" method="POST" action="">
                @csrf
                <div class="evaluation">
                    <input class="like-icon" type="image" src="/images/star.png" alt="お気に入り" width="32px" />
                    <input class="comment-icon" type="image" src="/images/comment.png" alt="コメント" width="32px" />
                </div>
                <div class="purchase-btn__container">
                    <input type="submit" value="購入する" />
                </div>
            </form>
        </div>
        <div class="item-detail__content">
            <h3 class="item-subtitle">商品説明</h3>
            <div class="item-inf__content">
                <p class="item-explanation">
                    {{$item->description}}
                </p>
            </div>
        </div>
        <div class="item-detail__content">
            <h3 class="item-subtitle">商品の情報</h3>
            <div class="item-detail__text">
                <h4 class="item-detail__ttl">カテゴリー</h4>
                <div class="category__content">
                    <p class="item-detail__category"></p>
                </div>
            </div>
            <div class="item-detail__text">
                <h4 class="item-detail__ttl">商品の状態</h4>
                <p class="item-detail__condition">{{$item->condition->condition}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

