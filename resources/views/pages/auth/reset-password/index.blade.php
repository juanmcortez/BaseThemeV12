<x-layouts.outside>
    <h1>{{ __('PASSWORD RESET') }}</h1>
    <form action="{{ route('password.update') }}" method="post">
        @csrf
        <input type="hidden" name="token" value="{{ request()->route('token') }}" required/>
        <p>{{ __('Enter your new password details') }}</p>

        <div class="group">
            <label for="email">{{ __('E-mail') }}</label>
            <input type="email" name="email" value="{{ request()->get('email') }}" required tabindex="1"/>
        </div>
        <div class="group">
            <label for="password">{{ __('Password') }}</label>
            <input type="password" name="password" required autofocus tabindex="2"/>
        </div>
        <div class="group">
            <label for="password_confirmation">{{ __('Confirm password') }}</label>
            <input type="password" name="password_confirmation" required tabindex="3"/>
        </div>
        <p class="text-sm">
            <span>
                {{ __("Have an account? ") }} <a href="{{ route('login') }}" tabIndex="5">{{ __("Log in") }}</a>
            </span>

            <span>
                {{ __("Don't have an account? ") }} <a href="{{ route('register') }}" tabIndex="6">{{ __("Sign up") }}</a>
            </span>
        </p>
        <button type="submit" tabIndex="4">{{ __("Reset your password") }}</button>
    </form>
</x-layouts.outside>
