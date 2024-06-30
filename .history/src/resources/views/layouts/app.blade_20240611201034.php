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
    <script src="{{ asset('js/index.js') }}"></script>
    <script src="{{ asset('js/sell.js') }}"></script>
</head>

<body>
    <div id="app">
        @component('components.header')
        @endcomponent
        @yield('main')
    </div>
</body>

</html>





document.addEventListener('DOMContentLoaded', function(){
  const tabs = document.getElementsByClassName('mypage-tab');
  for(let i = 0; i < tabs.length; i++) {
    tabs[i].addEventListener('click', tabSwitch, false);
  }


  function tabSwitch(){

    document.getElementsByClassName('is-active')[0].classList.remove('is-active');
    this.classList.add('is-active');
      
    document.getElementsByClassName('is-show')[0].classList.remove('is-show');
    const arrayTabs = Array.prototype.slice.call(tabs);
    const index = arrayTabs.indexOf(this);
    document.getElementsByClassName('mypage-panel')[index].classList.add('is-show');
  };
}, false);