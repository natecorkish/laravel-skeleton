<x-users::layouts.master>

    <x-slot name="title">
        {{ __('Reset your password') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </x-slot>

    <form method="POST" action="{{ route('password.email') }}">
    @csrf

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

        <div class="flex items-center justify-end mt-4">
            <x-core::forms.button class="primary">
                {{ __('Email Password Reset Link') }}
            </x-core::forms.button>
        </div>
    </form>

</x-users::layouts.master>
