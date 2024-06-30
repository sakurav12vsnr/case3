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
    <div class="comment">
        <div class="item-detail__img">
            <img class="item__img" src="/images/ItemImage.png" alt="商品画像" height= "400px" />
        </div>
        <div class="item-detail">
            <div class="item-detail__content">
                <h2 class="item-ttl">商品名</h2>
                <div class="brand-name">
                ブランド名
                </div>
                <div class="price">
                    ¥47,000(値段)
                </div>
                <form class="likes" method="POST" action="">
                @csrf
                <div class="evaluation">
                    <input class="like-icon" type="image" src="/images/star.png" alt="お気に入り" width="32px" />
                    <input class="comment-icon" type="image" src="/images/comment.png" alt="コメント" width="32px" />
                </div>
                <div class="add-comment">
                    <h4 class="add-comment__ttl">商品へのコメント</h4>
                    <textarea name="item-comment" id="item-comment" cols="30" rows="10" maxlength="120">{{ old('item-comment') }}</textarea>
                </div>
                <div class="comment-btn__container">
                    <input type="submit" value="コメントを送信する" />
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

