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
</head>

<body class="container">
    <header class="header">
        <a href="/"><img class="header__logo" src="/images/CoachTech.png" alt="COACHTECH" width="370px" height="36px"></img></a>
        <x-search />
        <x-navigation />
    </header>
    <div class="detail">
        <div class="item-detail__img">
            <img class="item__img" src="/images/{{$item->img_url}}" alt="商品画像" height= "400px" />
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
                <div class="evaluation">
                @if( Auth::check() )
                    <div class="like">
                        @if(count($item->likes) == 0)
                        <form class="favorite-item" method="POST" action="{{ route('like', ['item_id' => $item->id]) }}">
                            @csrf
                            <input class="like-icon inactive" type="image" src="/images/unlike.png" alt="いいね" width="32px" height="32px" />
                        </form>
                        @else
                        <form class="favorite-item" method="POST" action="{{ route('unlike', ['item_id' => $item->id]) }}">
                            @csrf
                            <input class="like-icon inactive" type="image" src="/images/like.png" alt="いいねを外す" width="32px" height="32px"/>
                        </form>
                        @endif
                    </div>
                    <input class="comment-icon" type="image" src="/images/comment.png" alt="コメント" width="32px" />
                @endif
                </div>
                <div class="purchase-btn__container">
                    <input type="submit" value="購入する" />
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
                            <p class="item-detail__category">{{$item->category}}</p>
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
</body>

</html>
