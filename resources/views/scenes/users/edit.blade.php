<x-core.layouts.app>

    <div class="lg:min-w-0 lg:flex-1">
        <div class="pl-4 pr-6 pt-4 pb-4 border-b border-t border-primary sm:pl-6 lg:pl-8 xl:pl-6 xl:pt-6 xl:border-t-0">
            <!--
             ! ------------------------------------------------------------
             ! User's general information
             ! ------------------------------------------------------------
             !-->
            <form action="{{ route('users.update', auth()->user()->id) }}" method="POST" class="mb-6">
                @csrf
                @method('patch')

                <div class="mb-6">
                    <h3 class="text-lg leading-6 font-medium text-primary">
                        {{ __('Personal information') }}
                    </h3>
                    <p class="mt-1 text-sm text-secondary">
                        {{ __('Update your personal information. Keep your account up-to-date for when you buy/or sell') }}
                    </p>
                </div>
                <div class="grid grid-cols-4 gap-6">
                    <div class="col-span-6 sm:col-span-4">
                        <x-core.forms.label>
                            {{ __('Name') }}
                        </x-core.forms.label>
                        <x-core.forms.input class="secondary" value="{{ $user->name }}" name="name"></x-core.forms.input>
                    </div>

                    <div class="col-span-4 sm:col-span-2">
                        <x-core.forms.label>
                            {{ __('Address') }}
                        </x-core.forms.label>
                        <x-core.forms.input class="secondary" value="{{ $user->address }}" name="address"></x-core.forms.input>
                    </div>

                    <div class="col-span-4 sm:col-span-2">
                        <x-core.forms.label>
                            {{ __('City') }}
                        </x-core.forms.label>
                        <x-core.forms.input class="secondary" value="{{ $user->city }}" name="city"></x-core.forms.input>
                    </div>

                    <div class="col-span-4 sm:col-span-2">
                        <x-core.forms.label>
                            {{ __('Country') }}
                        </x-core.forms.label>
                        <x-core.forms.input class="secondary" value="{{ $user->country }}" name="country"></x-core.forms.input>
                    </div>

                    <div class="col-span-4 sm:col-span-2">
                        <x-core.forms.label>
                            {{ __('Zip/Postal') }}
                        </x-core.forms.label>
                        <x-core.forms.input class="secondary" value="{{ $user->postal }}" name="postal"></x-core.forms.input>
                    </div>
                </div>

                <div class="py-6 text-right">
                    <x-core.forms.button class="secondary">
                        {{ __('Update profile') }}
                    </x-core.forms.button>
                </div>
            </form>

            <!--
             ! ------------------------------------------------------------
             ! Site Features
             ! ------------------------------------------------------------
             !-->
            <div action="#" method="POST" class="space-y-6">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-primary">
                        {{ __('Site Features') }}
                    </h3>
                    <p class="mt-1 text-sm text-secondary">
                        {{ __('Here are the features for the website. Things like appearance etc.') }}
                    </p>
                </div>
                <div class="grid grid-cols-4 gap-6">

                    <div class="col-span-4 sm:col-span-2">
                        <div class="bg-primary border border-primary rounded-lg overflow-hidden">
                            <div class="">
                                <img src="https://github.githubassets.com/images/modules/settings/color_modes/dark_preview.svg" class="w-full">
                            </div>
                            <div class="py-4 px-2 bg-primary flex items-center">
                                <input type="radio" class="mr-2 bg-secondary" :checked="$parent.dark" @click="$parent.dark = true" name="theme" id="light-theme">
                                <label class="font-bold cursor-pointer text-primary" for="light-theme">
                                    {{ __('Dark theme') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-4 sm:col-span-2">
                        <div class="bg-primary border border-primary rounded-lg overflow-hidden">
                            <div class="border-b border-primary">
                                <img src="https://github.githubassets.com/images/modules/settings/color_modes/light_preview.svg" class="w-full">
                            </div>
                            <div class="py-4 px-2 bg-primary flex items-center">
                                <input type="radio" class="mr-2 bg-secondary" :checked="!$parent.dark" @click="$parent.dark = false" name="theme" id="dark-theme">
                                <label class="font-bold cursor-pointer text-primary" for="dark-theme">
                                    {{ __('Light theme') }}
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-core.layouts.app>
