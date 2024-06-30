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
    <div class="comment">
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
                    <div class="like-btn">
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
                    <div class="comment-btn">
                        <a href="/item/comment/{{$item->id}}"><input class="comment-icon" type="image" src="/images/comment.png" alt="コメント" width="32px" /></a>
                    </div>
                @endif
                </div>
                <div class="comment-list">
                @foreach($user->likes as $item)
                    <div class="comment-card">
                        <div class="comment-card__user-inf">
                            <img class="comment-card__user-img" src="/images/{{$user->profile->img_url}}" alt="ユーザー画像" height="20px" />
                            <div class=comment-card__user-name>
                                {{$comment->user->name}}
                            </div>
                        </div>
                        <div class="comment-card__text">
                            {{$comment->comment}}
                        </div>
                    </div>
                @endforeach
                </div>
                <div class="add-comment">
                    <h4 class="add-comment__ttl">商品へのコメント</h4>
                    <form class="item-comment" method="POST" action="{{ route('comment.create', ['item_id' => $item->id]) }}">
                        @csrf
                        <textarea name="comment" id="new-comment" cols="30" rows="10" maxlength="120">{{ old('comment') }}</textarea>
                    </div>
                    <div class="comment-btn__container">
                        <input type="submit" value="コメントを送信する" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
