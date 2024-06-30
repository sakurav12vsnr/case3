<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>COACHTECH</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="container">
    <div class="purchase">
        <div class="purchase-item">
            <div class="purchase-item__content">
                <img class="purchase-item__img" src="/images/{{$item->img_url}}" alt="商品画像" width="150px">
                <div class="purchase-item__inf">
                    <h2 class="purchase-item__ttl">
                        {{$item->name}}
                    </h2>
                    <div class="purchase-item__price">
                        {{$item->price}}
                    </div>
                </div>
            </div>
            <div class="purchase-item__detail">
                <form class="purchase-item" action="{{ route('purchase', ['item_id' => $item->id]) }}" method="POST">
                    <div class="purchase-item__detail__payment">
                        <h3 class="purchase-item__detail-ttl">
                            支払い方法
                        </h3>
                    <a class="purchase-item__detail-change">
                        変更する
                    </a>
                </div>
                <div class="purchase-item__detail__address">
                    <h3 class="purchase-item__detail-ttl">
                        配送先
                    </h3>
                    <a class="purchase-item__detail-change" href="/purchase/address/{{$item->id}}">
                        変更する
                    </a>
                </div>
            </form>
        </div>
    </div>
    <div class="confirmation">
        <div class="confirmation-detail">
            <span class="purchase-container__item-price">
                商品代金 <p id="item-price"></p>
            </span>
            <span class="purchase-container__payment-amount">
                支払い金額 <p id="payment-amount"></p>
            </span>
            <span class="purchase-container__payment-methods">
                支払い方法 <p id="payment-methods"></p>
            </span>
        </div>
        <div class="confirmation__purchase-btn__container">
            <input type="submit" value="購入する" />
        </div>
    </div>
</div>
@endsection