@extends('layouts.app')

@section('main')
<div class="main">
    <div class="user-inf__item__img">
        <img class="user-image" src="images/UserImage.png" alt="ユーザー画像" />
        @if( Auth::check() )
        <p class="welcome">
            {{ Auth::profile()->name }}
        </p>
        @endif
        <button>
            
        </button>
    </div>
    <div></div>
</div>