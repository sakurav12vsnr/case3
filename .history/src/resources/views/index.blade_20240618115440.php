@extends('layouts.app')

@section('main')
<div class="main">
    <div class="tab-name">
        <ul class="tab-group">
            <li class="tab tab1 is-active">おすすめ</li>
            <li class="tab tab2">マイリスト</li>
        </ul>
    </div>
    <div class="panel-area">
        <div class="panel tab1 is-show">
            @foreach()
        </div>
        <div class="panel tab2">
            Panel2
        </div>
    </div>
</div>
@endsection