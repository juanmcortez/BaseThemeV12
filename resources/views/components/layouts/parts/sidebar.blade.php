<aside>
    <section>
        <h1>{{ config('app.name') }}</h1>
    </section>
    <section class="main-menu">
        <nav>
            <ul>
                <li>{{ __('Menu') }}</li>
            </ul>
        </nav>
    </section>
    <section>
        <nav class="user-menu">
            <ul x-data="{ open: false }">
                <li @click="open = !open">
                    <i class="fi fi-rs-circle-user"></i>
                    @if(auth()->user()->profile->full_name)
                        {!! __('<strong>:User</strong>', ['user' => auth()->user()->profile->short_name]) !!}
                    @else
                        {!! __('Welcome <strong>:User</strong> !!', ['user' => auth()->user()->username]) !!}
                    @endif
                    <ul class="submenu" x-show="open" @click.away="open = false"
                        x-transition:enter="transition-opacity ease-out duration-150"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="transition-opacity ease-in duration-150"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                    >
                        <li>{{ __('Menu item') }}</li>
                        <li>{{ __('Menu item') }}</li>
                        <li>{{ __('Menu item') }}</li>
                        <li>{{ __('Menu item') }}</li>
                        <li>{{ __('Menu item') }}</li>
                        <li>{{ __('Menu item') }}</li>
                        <li>
                            @auth
                                {{-- LOGOUT --}}
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fi fi-rs-exit"></i> {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">@csrf</form>
                                {{-- LOGOUT --}}
                            @endauth
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </section>
</aside>
