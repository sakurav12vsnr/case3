@extends('layouts.app')

@section('main')
<div class="main">
    <div class="tab-name">
        <input id="tab1" type="radio" name="tab-btn" checked />
        <input id="tab2" type="radio" name="tab-btn" />

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