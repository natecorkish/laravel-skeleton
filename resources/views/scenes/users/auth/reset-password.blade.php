<x-users::layouts.master>

    <x-slot name="title">
        {{ __('Reset your password') }}
    </x-slot>

    <x-slot name="description">
        {{ __('It looks like you have forgotten your password, no worries. Simply enter your email and we will send a password reset email') }}
    </x-slot>

    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!--
         ! ------------------------------------------------------------
         ! Your email address
         ! ------------------------------------------------------------
         !-->
        <div>
            <x-core::forms.label for="email" :value="__('Email')" />
            <x-core::forms.input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                placeholder="{{ __('Example: johndoe@mail.com') }}" required autofocus />
        </div>

        <!--
         ! ------------------------------------------------------------
         ! Your password
         ! ------------------------------------------------------------
         !-->
        <div class="mt-4">
            <x-core::forms.label for="password" :value="__('Password')" />
            <x-core::forms.input id="password" class="block mt-1 w-full"
                type="password" name="password" placeholder="***********"
                required />
        </div>

        <!--
         ! ------------------------------------------------------------
         ! Confirm your password
         ! ------------------------------------------------------------
         !-->
        <div class="mt-4">
            <x-core::forms.label for="password_confirmation" :value="__('Password Confirmation')" />
            <x-core::forms.input id="password_confirmation" class="block mt-1 w-full"
                type="password" name="password_confirmation" placeholder="**********"
                required autocomplete="current-password" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-core::forms.button class="ml-3 primary">
                {{ __('Reset Password') }}
            </x-core::forms.button>
        </div>
    </form>

</x-users::layouts.master>
