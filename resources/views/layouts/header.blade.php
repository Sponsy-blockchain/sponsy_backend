<?php $user=\Illuminate\Support\Facades\Auth::user(); ?>
<header class="header">
    <div class="header__container"><a href="/"><img class="header__logo" src="/images/logo.png" alt="logo"></a>
        <div class="header__info">
            <div class="header__login">
                <div class="header__name notify-selector">{{$user->name}}</div>
                <div class="header__swither">
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                        Log out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
            <div class="header__notice notify-selector"><img class="header__notice-image" src="/images/bell.svg" alt="notice bell">
                <div class="header__notice-quantity">2</div>
            </div>
        </div>
    </div>
</header>