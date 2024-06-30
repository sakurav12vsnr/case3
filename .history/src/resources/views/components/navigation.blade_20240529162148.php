<div class="menu">
    <!-- He who is contented is rich. - Laozi -->
    @if( Auth::check() )
        <nav class="header-nav">
            <div class="header-nav__list">
                <div class="header-nav__item">
                    <a href="/logout">ログアウト</a>
                </div>
                <div class="header-nav__item">
                    <a href="/mypage">マイページ</a>
                </div>
            </div>
        </nav>
    @else
        <nav class="header-nav">
            <ul class="header-nav__list">
                <li class="header-nav__item"><a href="/login">ログイン</a></li>
                <li class="header-nav__item"><a href="/register">会員登録</a></li>
            </ul>
        </nav>
    @endif
</div>