<x-layouts.outside>
    <h1>{{ __('REGISTER') }}</h1>
    <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="group">
            <label for="username">{{ __('Username') }}</label>
            <input type="text" name="username" value="{{ old('username') }}" required autofocus tabindex="1"/>
        </div>
        <div class="group">
            <label for="email">{{ __('E-mail') }}</label>
            <input type="email" name="email" value="{{ old('email') }}" required tabindex="2"/>
        </div>
        <div class="group">
            <label for="password">{{ __('Password') }}</label>
            <input type="password" name="password" required tabindex="3"/>
        </div>
        <div class="group">
            <label for="password_confirmation">{{ __('Confirm password') }}</label>
            <input type="password" name="password_confirmation" required tabindex="4"/>
        </div>
        <div class="group links">
            <span>
                {{ __("Already have an account? ") }} <a href="{{ route('login') }}" tabIndex="6">{{ __("Log in") }}</a>
            </span>

            @if (Route::has('password.request'))
                <span>
                <a href="{{ route('password.request') }}" tabIndex="7">{{ __("Forgot password?") }}</a>
                </span>
            @endif
        </div>
        <button type="submit" tabIndex="5">{{ __("Create account") }}</button>
    </form>
</x-layouts.outside>
