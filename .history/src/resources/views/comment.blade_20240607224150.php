@extends('layouts.app')

@section('main')
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
                    <textarea name="item-comment" id="item-comment" cols="30" rows="10" maxlength="120">{{ old('item-comment') </textarea>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

