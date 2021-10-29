<x-core.layouts.core>

    <div class="min-h-screen bg-secondary flex">
        <div class="flex-1 flex flex-col justify-center py-6 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div class="mx-auto w-full max-w-sm lg:w-96">
                <div>
                    <a href="/" class="flex items-center">
                        <img class="h-8 w-auto mr-2"
                            src="/assets/images/logo.png">
                        <span class="font-bold text-xl text-primary">{{ config('app.name') }}</span>
                    </a>
                    <h2 class="mt-6 text-3xl font-extrabold text-primary">
                        {{ $title }}
                    </h2>
                    <p class="mt-6 text-secondary">
                        {{ $description }}
                    </p>

                    @if ($errors->any())
                        <div {{ $attributes }} class="mt-5">
                            <div class="font-medium text-ternary">
                                {{ __('Whoops! Something went wrong.') }}
                            </div>

                            <ul class="mt-3 list-disc list-inside text-sm text-ternary">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>

                <div class="mt-8">
                    {{ $slot }}
                </div>
            </div>
        </div>
        <div class="hidden lg:block relative w-0 flex-1">
            <img class="absolute inset-0 h-full w-full object-cover" src="https://wallpapercave.com/wp/wp5339394.jpg" alt="">
        </div>
    </div>

</x-core.layouts.core>
