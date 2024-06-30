@extends(layouts.app)

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
                <p class=""></p>
        </div>
    </form>
</div>