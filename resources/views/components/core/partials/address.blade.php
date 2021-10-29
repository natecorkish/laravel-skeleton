<div class="grid grid-cols-6 gap-6">

    <!--
     ! ------------------------------------------------------------
     ! Address
     ! ------------------------------------------------------------
     !-->
    <div class="col-span-6 md:col-span-3">
        <x-core::forms.label>
            {{ __('Address') }}
        </x-core::forms.label>
        <x-core::forms.input type="text" class="input secondary" placeholder="{{ __('Example: 123 Business Street') }}"
            name="address" value="{{ old('address') ?? $address->address ?? null }}"/>
        <x-core::forms.errors name="address" />
    </div>

    <!--
     ! ------------------------------------------------------------
     ! City
     ! ------------------------------------------------------------
     !-->
    <div class="col-span-6 md:col-span-3">
        <x-core::forms.label>
            {{ __('City') }}
        </x-core::forms.label>
        <x-core::forms.input type="text" class="input secondary" placeholder="{{ __('Example: London') }}"
            name="city" value="{{ old('city') ?? $address->city ?? null }}"/>
        <x-core::forms.errors name="city" />
    </div>

    <!--
     ! ------------------------------------------------------------
     ! Postal
     ! ------------------------------------------------------------
     !-->
    <div class="col-span-6 md:col-span-3">
        <x-core::forms.label>
            {{ __('Postal') }}
        </x-core::forms.label>
        <x-core::forms.input type="text" class="input secondary" placeholder="{{ __('Example: 123456') }}"
            name="postal" value="{{ old('postal') ?? $address->postal ?? null }}"/>
        <x-core::forms.errors name="postal" />
    </div>

    <!--
     ! ------------------------------------------------------------
     ! State
     ! ------------------------------------------------------------
     !-->
    <div class="col-span-6 md:col-span-3">
        <x-core::forms.label>
            {{ __('State') }}
        </x-core::forms.label>
        <x-core::forms.input class="input secondary" placeholder="{{ __('Example: Greater London') }}"
            name="state" value="{{ old('state') ?? $address->state ?? null }}"/>
        <x-core::forms.errors name="state" />
    </div>


    <!--
     ! ------------------------------------------------------------
     ! Country
     ! ------------------------------------------------------------
     !-->
    <div class="col-span-6 md:col-span-3">
        <x-core::forms.label>
            {{ __('Country') }}
        </x-core::forms.label>
        <x-core::forms.select class="input secondary" name="country_id">
            <x-slot name="options">
                <option disabled selected>{{ __('Please select an option') }}</option>
                @foreach(\App\Core\Models\Country::all() as $country)
                    <option value="{{ $country->id }}"
                        @if(old('country_id') == $country->id)
                        selected
                        @elseif($address->country->id ?? null == $country->id)
                        selected
                        @endif
                    >
                        {{ $country->name }}
                    </option>
                @endforeach
            </x-slot>
        </x-core::forms.select>
        <x-core::forms.errors name="country_id" />
    </div>

</div>
