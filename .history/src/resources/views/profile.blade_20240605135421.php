@extends('layouts.app')

@section('main')
<div class="main">
    <h2 class="main-ttl">プロフィール設定</h2>
    <form action="/mypage/profile" method="POST">
        @csrf
        <div class="profile">
            <div class="profile__item__img">
                <img class="profile-image" src="images/UserImage.png" alt="ユーザー画像" />
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
@endsection