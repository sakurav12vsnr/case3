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
    <script src="{{ asset('js/profile.js') }}"></script>
</head>

<body class="container">
    <header class="header">
        <img class="header__logo" src="/images/CoachTech.png" alt="COACHTECH" width="370px" height="36px"></img>
        <x-search />
        <x-navigation />
    </header>
    <div class="main">
        <h2 class="main-ttl">プロフィール設定</h2>
        <div class="profile">
            <form action="/mypage/profile" id="profile-img" method="POST" enctype='multipart/form-data'>
            @csrf
                <div class="profile__item__img">
                    <div class="icon_img_prv">
                        <img id="img_prv" class="img_prv_thumbnail" src="/images/UserImage.png" />
                    </div>
                    <div class="icon_img">
                        
                    <input type="file" name="img_url" id="fileElem" accept="image/*" style="display:none" />
                    <button type="button" class="profile__ed-btn" id="fileSelect">画像を選択する</button>
                </div>
                <div class="profile__item">
                    <div class="inf-ttl">
                        ユーザー名
                    </div>
                    <div class="inf-content">
                        <input type="text" name="username" value="{{ old('username') }}" />
                    </div>
                </div>
                <div class="profile__item">
                    <div class="inf-ttl">
                        郵便番号
                    </div>
                    <div class="inf-content">
                        <input type="hidden" class="p-country-name" value="Japan" />
                        <input type="text" class="p-postal-code" name="postcode" id="postcode" value="{{ old('postcode') }}" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');"z />
                    </div>
                </div>
                <div class="profile__item">
                    <div class="inf-ttl">
                        住所
                    </div>
                    <div class="inf-content">
                        <input type="text" name="address" value="{{ old('address') }}" />
                    </div>
                </div>
                <div class="profile__item">
                    <div class="inf-ttl">
                        建物名
                    </div>
                    <div class="inf-content">
                        <input type="text" name="building-name" value="{{ old('building-name') }}" />
                    </div>
                </div>
                <div class="profile-btn__container">
                    <input type="submit" value="更新する" />
                </div>
            </div>
        </form>
    </div>
</body>
