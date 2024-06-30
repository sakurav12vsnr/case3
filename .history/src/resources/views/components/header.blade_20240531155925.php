<header class="header">
    <img class="header__logo" src="images/CoachTech.png" alt="COACHTECH" width="370px" height="36px"></img>
    @if(request()->path() !== '/register' || request()-> path)
    <x-search />
    <x-navigation />
</header>