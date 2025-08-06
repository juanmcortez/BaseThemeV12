<x-layouts.outside>
    <h1>{{ __('PASSWORD RESET') }}</h1>
    <form action="{{ route('password.email') }}" method="post" class="recover">
        @csrf
        <p>{{ __('Enter your e-mail to reset your account\'s password.') }}</p>
        <div class="group">
            <label for="email">{{ __('E-mail') }}</label>
            <input type="email" name="email" value="{{ old('email') }}" required autofocus tabindex="1"/>
        </div>
        <div class="group links">
            <span>
                {{ __("Have an account? ") }} <a href="{{ route('login') }}" tabIndex="3">{{ __("Log in") }}</a>
            </span>

            <span>
                {{ __("Don't have an account? ") }} <a href="{{ route('register') }}" tabIndex="4">{{ __("Sign up") }}</a>
            </span>
        </div>
        <button type="submit" tabIndex="2">{{ __("Send reset link") }}</button>
    </form>
</x-layouts.outside>
