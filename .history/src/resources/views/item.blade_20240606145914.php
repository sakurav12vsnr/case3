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
        <div class="evaluation">
            @if( Auth::check() )
            
        </div>

    </div>
</div>

