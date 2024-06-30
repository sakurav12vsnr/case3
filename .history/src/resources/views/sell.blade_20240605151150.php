@extends('layouts.app')

@section('main')
<div class="main">
    <h2 class="main-ttl">商品の出品</h2>
    <form action="/sell" method="POST">
        @csrf
        <div class="sell-item">
            <div class="sell-item__img">
                <div class="item-inf__ttl">
                    商品画像
                </div>
                <p class="item-img">画像を選択する</p>
                <input id="img__upload" type="file" accept="image/*" name="item-img__upload" class="hidden" onchange="previewImage(this)" />
            </div>
            <div class="item-detail__ttl">
                <h3 class="item-detail__ttl">商品の詳細</h3>
                <div class="item-detail__subtitle">
                    カテゴリー
                </div>
                <div class="item-detail__content">
                    <input type="text" name="category" value="{{ old('category') }}" />
                    </div>

        </div>
    </form>
</div>
@endsection