<div class="search">
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
    <form class="search-box" action="/search" method="GET">
        @csrf
        <input class="search__keyword" type="text" placeholder="なにをお探しですか？" value="{!! $keyword ?? '' !!}" name="keyword" />
        <input type="submit" class="search__btn" value="">
    </form>
</div>