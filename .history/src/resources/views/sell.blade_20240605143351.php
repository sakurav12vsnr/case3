@extends(layouts.app)

@section('main')
<div class="main">
    <h2 class="main-ttl">商品の出品</h2>
    <form action="/sell" method="POST">
        @csrf
        <div class="item">
            <div class="profile__item__img">
                    <img class="profile-image" src="/images/UserImage.png" alt="ユーザー画像" />
                    <input class="profile-img__btn" type="file" value="画像を選択する" />
                </div>
        </div>
    </form>
</div>