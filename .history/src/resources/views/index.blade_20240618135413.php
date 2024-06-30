@extends('layouts.app')

@section('main')
<div class="main">
    <div class="tab-name">
        <ul class="tab-group">
            <li class="tab tab1 is-active">おすすめ</li>
            <li class="tab tab2">マイリスト</li>
        </ul>
    </div>
    <div class="panel-area">
        <div class="panel tab1 is-show">
            
        @foreach($items as $item)
            <div class="item-card">
                <img class="item-card__img" src="images/{{$item->img_url}}" alt="商品画像" />
                <div class="item-card__content">
                    <a class="shop-card__content__link" href="/item/{{$item->id}}">{{$item->name}}</a>
                    <p class="shop-card__content__txt">{{$item->price}}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="panel tab2">
            Panel2
        </div>
    </div>
</div>
@endsection