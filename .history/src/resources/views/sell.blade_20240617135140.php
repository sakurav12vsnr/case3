@extends('layouts.app')

@section('main')
<div class="main">
    <h2 class="main-ttl">商品の出品</h2>
    <div class="sell-item">
        <form action="/sell" method="POST" enctype='multipart/form-data'>
        @csrf
            <div class="item-inf__ttl">
                商品画像
        </div>
        <div class="sell-item__img">
            <button class="ed-btn" id="fileSelect">画像を選択する</button>
                
                
                    <input type="file" name="img_url" id="fileElem" accept="image/*" style="display:none" />

        </div>
        <form action="/sell" method="POST">
            @csrf
            <div class="sell-item__detail">
                <h3 class="sell-item__detail__ttl">商品の詳細</h3>
                <div class="sell-item__detail__subtitle">
                    カテゴリー
                </div>
                <select class="sell-item__detail__content" name="category_id">
                    <option value=""></option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category }}</option>
                    @endforeach
                </select>
                <div class="sell-item__detail__subtitle">
                    商品の状態
                </div>
                <select class="sell-item__detail__content" name="condition_id">
                    <option value=""></option>
                    @foreach ($conditions as $condition)
                        <option value="{{ $condition->id }}">{{ $condition->condition }}</option>
                    @endforeach
                </select>
            </div>
            <div class="sell-item__detail">
                <h3 class="sell-item__detail__ttl">商品名と説明</h3>
                <div class="sell-item__detail__subtitle">
                    商品名
                </div>
                <div class="sell-item__detail__content">
                    <input type="text" name="name" value="{{ old('name') }}" />
                </div>
                <div class="sell-item__detail__subtitle">
                    商品の説明
                </div>
                <div class="sell-item__detail__content">
                    <input type="text" name="description" value="{{ old('description') }}" />
                </div>
            </div>
            <div class="sell-item__detail">
                <h3 class="sell-item__detail__ttl">販売価格</h3>
                <div class="sell-item__detail__subtitle">
                    販売価格
                </div>
                <div class="sell-item__detail__content-price">
                    <div class="sell-item__price">
                        <span>¥</span>
                        <input type="text" name="price" value="{{ old('price') }}" />
                    </div>
                </div>
            </div>
            <div class="sell-btn__container">
                    <input type="submit" value="出品する" />
            </div>
        </form>
    </div>
</div>
@endsection