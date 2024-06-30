<div class="menu">
    <!-- He who is contented is rich. - Laozi -->
    @if( Auth::check() )
        <nav class="header-nav">
            <ul class="header-nav__list">
                <li class="header-nav__item"><a href="/logout">ログアウト</a></li>
                <li class="header-nav__item"><a href="/mypage">マイページ</a></li>
            </ul>
        </nav>
    @else
        <nav class="header-nav">
            <ul class="header-nav__list">
                <li class="header-nav__item"</A></li>
            </ul>
        </nav>
</div>