<x-layouts.outside>
    <h1>{{ __('LOGIN') }}</h1>
    <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="group">
            <label for="username">{{ __('Username') }}</label>
            <input type="text" name="username" value="{{ old('username') }}" required autofocus tabindex="1"/>
        </div>
        <div class="group">
            <label for="password">{{ __('Password') }}</label>
            <input type="password" name="password" required tabindex="2"/>
        </div>
        <div class="group links">
            <span>
                {{ __("Don't have an account? ") }} <a href="{{ route('register') }}" tabIndex="4">{{ __("Sign up") }}</a>
            </span>

            @if (Route::has('password.request'))
                <span>
                    <a href="{{ route('password.request') }}" tabIndex="5">{{ __("Forgot password?") }}</a>
                </span>
            @endif
        </div>
        <button type="submit" tabIndex="3">{{ __("Log in") }}</button>
    </form>
</x-layouts.outside>
