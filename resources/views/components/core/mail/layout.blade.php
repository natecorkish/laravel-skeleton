<html>
    <body>
        <div class="app font-sans min-w-screen min-h-screen bg-grey-50 py-8 px-4">
            <div class="mail__wrapper max-w-md mx-auto">
                <div class="mail__content bg-white p-8 shadow-md">
                    <div class="content__header h-64 flex flex-col items-center justify-center text-center tracking-wide leading-normal bg-gray-800 -mx-8 -mt-8">
                        <h1 class="text-blue-400 text-4xl">{{ $title }}</h1>
                        <p class="text-white text-2xl">
                            {{ $subtitle }}
                        </p>
                    </div>

                    {{ $slot }}

                    <div class="content__footer mt-4 text-center text-grey-darker">
                        <h3 class="text-base sm:text-lg mb-2">
                            {{ __('Thanks for using :name', ['name' => config('app.name')]) }}
                        </h3>
                        <p>{{ config('app.url') }}</p>
                    </div>
                </div>
            </div>

            <div class="mail__meta text-center text-sm text-grey-darker mt-8">

                <div class="meta__social flex justify-center my-4">
                    <a href="#" class="flex items-center justify-center mr-4 bg-black text-white rounded-full w-8 h-8 no-underline">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="flex items-center justify-center mr-4 bg-black text-white rounded-full w-8 h-8 no-underline">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="flex items-center justify-center bg-black text-white rounded-full w-8 h-8 no-underline">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>

                <div class="meta__help">
                    <p class="leading-loose">
                        Questions or concerns? <a href="#" class="text-grey-darkest">help@theapp.io</a>
                        <br>
                        Want to quit getting updates? <a href="#" class="text-grey-darkest">Unsubscribe</a>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
