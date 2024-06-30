@extends('layouts.app')

@section('main')
<div class="main">
    <div class="item-detail__img">
        <img class="item__img" src="images/ItemImage" alt="商品画像" width="100%" />
    </div>
    <div class="item-detail">
        <h2 class="item-ttl">商品名</h2>
        <div class="brand-name">
            ブランド名
        </div>
        <div class="price">¥47,000(値段)</div>
        @if( Auth::check() )
            <form class="likes" method="POST" action="">
                @csrf
                <div class="evaluation">
                    <input class="like-icon" type="image" src="/images/star.png" alt="お気に入り" width="32px" />
                    <input class="comment-icon" type="image" src="/images/comment.png" alt="コメント" width="32px" />
                </div>
            </form>
        </div>
        <div class="purchase-btn__container">
            <input type="submit" value="購入する" />
        </div>
        <h3 class="item-subtitle">商品説明</h3>
        <div class="item-inf__content">
            <p></p>
        </div>
    </div>
</div>

