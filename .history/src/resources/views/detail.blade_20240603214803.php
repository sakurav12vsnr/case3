@extends('layouts.app')

@section('main')
<div class="main">
    <div class="item__img">
        <img class="item-detail__img" src="{!! $item->image_url !!}" alt="item-img" />
    </div>
    <div class="item-inf">
        <h2 class="item-inf__ttl">商品名</h2>
    </div>