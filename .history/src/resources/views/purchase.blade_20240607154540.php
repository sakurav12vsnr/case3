@extends('layouts.app')

@section('main')
<div class="purchase">
    <div class="purchase-item">
        <img class="purchase-item__img" src="images/ItemImage" alt="商品画像">
        <div class="purchase-item__inf">
            <div class="purchase-item__ttl">
                商品名
            </div>
            <div class="purchase-item__price">
                ¥47,000
            </div>
        </div>
        <div class="purchase-item__detail">
            <form action="/purchase" method="POST">
                <div class="purchase-item__detail-ttl">
                    支払い方法
                </div>
                <a class="purchase-item__detail-change">
                    変更する
                </a>
            </div>
            <div class="purchase-item__detail">
                <div class="purchase-item__detail-ttl">
                    配送先
                </div>
                <a class="purchase-item__detail-change">
                    変更する
                </a>
            </div>
        </div>
        <div class="purchase-confirmation">
            <span class="purchase-container">
                商品代金 <p id="item-price"></p>
            </span>
            <span class="purchase-container">
                支払い金額 <p id="payment-amount"></p>
            </span>
            <span class="purchase-container">
                
            </span>
    </div>
</div>