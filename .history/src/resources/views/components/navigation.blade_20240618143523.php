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
                <div class="header-nav__btn">
                    <input type="button" onclickvalue="出品" />
                </div>
            </div>
        </nav>
    @else
        <nav class="header-nav">
            <div class="header-nav__list">
                <div class="header-nav__item">
                    <a href="/login">ログイン</a>
                </div>
                <div class="header-nav__item">
                    <a href="/register">会員登録</a>
                </div>
                <div class="header-nav__btn">
                    <input type="submit" value="出品" />
                </div>
            </div>
        </nav>
    @endif
</div>