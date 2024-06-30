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

<body>
    <div class="container">
        <header class="header"></header>
    </div>
    <div class="main">
        <h2 class="main-ttl">住所の変更</h2>
        <form class="address-change" method="POST" action="{{ route('address.update', ['profile_id' => $profile->id]) }}">
            @method('PATCH')
            @csrf
            <div class="address">
                <div class="address-form__content">
                    @if (count($errors) > 0)
                    <ul class="error__lists">
          @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
        </ul>
        @endif
                    <div class="address__ttl">
                        郵便番号
                    </div>
                    <div class="address__content">
                        <input type="hidden" class="p-country-name" value="Japan" />
                        <input type="text" class="p-postal-code" name="postcode" id="postcode" value="{{ old('postcode') }}" />
                    </div>
                </div>
                <div class="address-form__content">
                    <div class="address__ttl">
                        住所
                    </div>
                    <div class="address__content">
                        <input type="text" name="address" value="{{ old('address') }}" />
                    </div>
                </div>
                <div class="address-form__content">
                    <div class="address__ttl">
                        建物名
                    </div>
                    <div class="address__content">
                        <input type="text" name="building" value="{{ old('building-name') }}" />
                    </div>
                </div>
                <div class="address-btn__container">
                    <input type="submit" value="更新する" />
                </div>
            </div>
        </form>
    </div>
</body>

</html>