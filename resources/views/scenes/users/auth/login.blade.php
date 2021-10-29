<x-users.layouts.master>

    <x-slot name="title">
        {{ __('Sign in to your account') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Sign in to your account to easily manage your work life.') }}
    </x-slot>

    <form method="POST" action="{{ route('login') }}">
    @csrf

    <!-- Email Address -->
        <div>
            <x-core.forms.label for="email" :value="__('Email')"></x-core.forms.label>
            <x-core.forms.input id="email" class="primary block mt-1 w-full" type="email" name="email"
                :value="old('email')" placeholder="{{ __('Example: johndoe@mail.com') }}" required autofocus></x-core.forms.input>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-core.forms.label for="password" :value="__('Password')"></x-core.forms.label>
            <x-core.forms.input id="password" class="primary block mt-1 w-full" type="password" name="password"
                placeholder="**********" required autocomplete="current-password"></x-core.forms.input>
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="bg-primary rounded border-primary text-secondary shadow-sm"
                    name="remember">
                <span class="ml-2 text-sm text-primary">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4 gap-2">
            <a class="underline text-sm text-primary hover:text-primary" href="{{ route('register') }}">
                {{ __('Need an account?') }}
            </a>

            @if (Route::has('password.request'))
                <a class="underline text-sm text-primary hover:text-secondary" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-core.forms.button class="ml-3 primary">
                {{ __('Login') }}
            </x-core.forms.button>
        </div>
    </form>

</x-users.layouts.master>
