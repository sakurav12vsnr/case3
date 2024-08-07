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
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>

<body>
    <div class="container">
        <header class="header"></header>
    </div>
    <div class="main">
        <h2 class="main-ttl">住所の変更</h2>
        <form action="/purchase/address" method="POST">
            @csrf
            <div class="address">
                <div class="address-form__content">
                    <div class="address-form__ttl">
                        郵便番号
                    </div>
                    <div class="address-form__content">
                        <input type="hidden" class="p-country-name" value="Japan" />
                        <input type="text" class="p-postal-code" name="postcode" id="postcode" value="{{ old('postcode') }}" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');"z />
                    </div>
                </div>
                <div class="address-form__content">
                    <div class="address-form__ttl">
                        パスワード
                </div>
                <div class="form__content">
                    <input type="password" name="password" />
                </div>
            </div>
    </div>
</body>