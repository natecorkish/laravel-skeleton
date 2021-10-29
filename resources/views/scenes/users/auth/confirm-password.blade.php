<x-users::layouts.master>

    <x-slot name="title">
        {{ __('Confirm password') }}
    </x-slot>

    <x-slot name="description">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </x-slot>

    <form method="POST" action="{{ route('password.confirm') }}">
    @csrf

    <!--
         ! ------------------------------------------------------------
         ! Your password
         ! ------------------------------------------------------------
         !-->
        <div>
            <x-core::forms.label for="password" :value="__('Password')" />
            <x-core::forms.input id="password" class="primary block mt-1 w-full" type="password" name="password"
                :value="old('password')" placeholder="*******" required autocomplete="current-password" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-core::forms.button class="primary">
                {{ __('Confirm') }}
            </x-core::forms.button>
        </div>
    </form>

</x-users::layouts.master>
