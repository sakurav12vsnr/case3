@extends('layouts.app')

@section('main')
<div class="main">
    <div class="detail">
        <div class="item-detail__img">
            <img class="item__img" src="{{!! $item->img_url !!}}" alt="商品画像" height= "400px" />
        </div>
        <div class="item-detail">
            <div class="item-detail__content">
                <h2 class="item-ttl">{{$item->name}}</h2>
                <div class="brand-name">
                    ブランド名
                </div>
                <div class="price">
                    {{$item->price}}(値段)
                </div>
                <form class="likes" method="POST" action="">
                    @csrf
                    <div class="evaluation">
                        <input class="like-icon" type="image" src="images/star.png" alt="お気に入り" width="32px" />
                        <input class="comment-icon" type="image" src="images/comment.png" alt="コメント" width="32px" />
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
                        <p class="item-detail__category">{{$category_item->category}}</p>
                    </div>
                </div>
                <div class="item-detail__text">
                    <h4 class="item-detail__ttl">商品の状態</h4>
                    <p class="item-detail__condition">{{$item->condition}}好</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

