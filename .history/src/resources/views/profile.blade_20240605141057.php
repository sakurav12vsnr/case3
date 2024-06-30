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
        <header class="header">
            <img class="header__logo" src="images/CoachTech.png" alt="COACHTECH" width="370px" height="36px"></img>
            <x-search />
            <x-navigation />
        </header>
    </div>
    <div class="main">
        <h2 class="main-ttl">プロフィール設定</h2>
        <form action="/mypage/profile" method="POST">
            @csrf
            <div class="profile">
                <div class="profile__item__img">
                    <img class="profile-image" src="/images/UserImage.png" alt="ユーザー画像" />
                    <input class="profile-img__btn" type="file" value="画像を選択する" />
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
@endsection