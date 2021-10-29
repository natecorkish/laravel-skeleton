<x-users.layouts.master>

    <x-slot name="title">
        {{ __('Sign up for an account') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Sign up for an account to easily manage your work life.') }}
    </x-slot>

    <form method="POST" action="{{ route('register') }}">
    @csrf

        <!--
         ! ------------------------------------------------------------
         ! Your name
         ! ------------------------------------------------------------
         !-->
        <div>
            <x-core.forms.label>
                {{ __('Name') }}
            </x-core.forms.label>
            <x-core.forms.input class="primary" value="{{ old('name') }}"
                name="name" placeholder="{{ __('Ex: John Doe') }}"></x-core.forms.input>
            <x-core.forms.errors name="name" />
        </div>

        <!--
         ! ------------------------------------------------------------
         ! Your email address
         ! ------------------------------------------------------------
         !-->
        <div class="mt-4">
            <x-core.forms.label>
                {{ __('Email') }}
            </x-core.forms.label>
            <x-core.forms.input class="primary" value="{{ old('email') }}"
                name="email" placeholder="{{ __('Ex: johndoe@mail.com') }}"></x-core.forms.input>
            <x-core.forms.errors name="email"></x-core.forms.errors>
        </div>

        <!--
         ! ------------------------------------------------------------
         ! Your password
         ! ------------------------------------------------------------
         !-->
        <div class="mt-4">
            <x-core.forms.label>
                {{ __('Password') }}
            </x-core.forms.label>
            <x-core.forms.input type="password" class="primary" value="{{ old('password') }}"
                name="password" placeholder="********"></x-core.forms.input>
            <x-core.forms.errors name="password"></x-core.forms.errors>
        </div>

        <!--
         ! ------------------------------------------------------------
         ! Confirm your password
         ! ------------------------------------------------------------
         !-->
        <div class="mt-4">
            <x-core.forms.label>
                {{ __('Password Confirmation') }}
            </x-core.forms.label>
            <x-core.forms.input type="password" class="primary" value="{{ old('password_confirmation') }}"
                name="password_confirmation" placeholder="********"></x-core.forms.input>
            <x-core.forms.errors name="password_confirmation" required></x-core.forms.errors>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-primary hover:text-primary" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-core.forms.button class="ml-4 primary">
                {{ __('Register') }}
            </x-core.forms.button>
        </div>
    </form>

</x-users.layouts.master>
