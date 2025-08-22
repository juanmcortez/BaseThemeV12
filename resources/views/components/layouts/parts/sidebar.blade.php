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
            <ul>
                <li>
                    <i class="fi fi-rr-circle-user"></i>
                    @if(auth()->user()->full_name)
                        {!! __('Welcome <strong>:User</strong>!', ['user' => auth()->user()->username]) !!}
                    @else
                        {!! __('Welcome <strong>:User</strong>!', ['user' => auth()->user()->username]) !!}
                    @endif
                    <ul class="submenu hidden">
                        <li>{{ __('Menu item') }}</li>
                        <li>{{ __('Menu item') }}</li>
                        <li>{{ __('Menu item') }}</li>
                        <li>{{ __('Menu item') }}</li>
                        <li>{{ __('Menu item') }}</li>
                        <li>{{ __('Menu item') }}</li>
                    </ul>
                </li>
            </ul>
        </nav>
    </section>
</aside>
