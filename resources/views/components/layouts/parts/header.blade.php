<header>
    <div class="left-mod">
        {{ __('HEADER') }}
    </div>
    <div class="center-mod">
        {{-- CENTER MODULE --}}
    </div>
    <div class="right-mod">
        @auth
            {{-- LOGOUT --}}
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">@csrf</form>
            {{-- LOGOUT --}}
        @endauth
    </div>
</header>
