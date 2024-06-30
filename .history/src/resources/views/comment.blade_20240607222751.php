@extends('layouts.app')

@section('main')
<div class="comment">
    <div class="item-detail__img">
        <img class="item__img" src="images/ItemImage.png" alt="商品画像" height= "400px" />
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
                    <input class="like-icon" type="image" src="images/star.png" alt="お気に入り" width="32px" />
                    <input class="comment-icon" type="image" src="images/comment.png" alt="コメント" width="32px" />
                </div>
            </form>
        </div>
        h4>
                <div class="category__content">
                    <p class="item-detail__category">洋服</p>
                    <p class="item-detail__category">メンズ</p>
                </div>
            </div>
            <div class="item-detail__text">
                <h4 class="item-detail__ttl">商品の状態</h4>
                <p class="item-detail__condition">良好</p>
            </div>
        </div>
    </div>
</div>
@endsection

