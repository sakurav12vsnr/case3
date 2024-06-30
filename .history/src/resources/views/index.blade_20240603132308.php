@extends('layouts.app')

@section('main')
<div class="main">
    <div class="tab-name">
        <ul class="tab-group">
            <li class="tab1">おすすめ</li>
            <li class="tab2">マイリスト</li>
        </ul>

        <div class="tab-area">
            <label class="tab1-label" for="tab1">おすすめ</label>
            <label class="tab2-label" for="tab2">マイリスト</label>
        </div>
        <div class="panel-area">
            <div id="panel1" class="tab-panel">
                <p>panel1</p>
            </div>
            <div id="panel2" class="tab-panel">
                <p>panel2</p>
            </div>
        </div>
    </div>
</div>