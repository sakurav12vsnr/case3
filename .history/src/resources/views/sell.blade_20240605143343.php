@extends(layouts.app)

@section('main')
<div class="main">
    <h2 class="main-ttl">商品の出品</h2>
    <form action="/sell" method="POST">
        @csrf
        <div class="item">
            
        </div>
    </form>
</div>