<div class="w-full lg:w-64 flex-1 pt-8 lg:pb-4 fixed z-10 lg:relative pb-4 bg-secondary border-b border-secondary shadow lg:shadow-none opacity-95">
    <div class="px-4">
        <div class="flex items-center flex-shrink-0 text-lg font-bold">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
            </svg>
            <span class="ml-2">{{ config('app.name') }}</span>
        </div>
        <nav class="mt-5 lg:mt-8 mr-5 flex-1 flex flex-row lg:flex-col overflow-y-scroll no-scrollbar">
            <div class="space-x-2 lg:space-x-0 lg:space-y-1 flex flex-row lg:flex-col">

                <a href="{{ route('dashboard') }}" class="text-secondary hover:bg-primary hover:text-primary group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                    <svg class="text-primary hidden lg:block mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    Dashboard
                </a>

                @for($i = 1; $i < 5; $i++)
                    <a href="" class="text-secondary hover:bg-primary hover:text-primary group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                        <svg class="text-primary hidden lg:block group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        {{ __('Link :count', ['count' => $i]) }}
                    </a>
                @endfor

            </div>
            <hr class="border-t border-primary my-5 hidden lg:block" aria-hidden="true">
            <div class="px-2 space-x-2 lg:space-x-0 lg:space-y-1 flex flex-row lg:flex-col">
                <a href="#" class="text-secondary hover:bg-primary hover:text-primary group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                    <svg class="text-primary hidden lg:block group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    Reports
                </a>

                <a href="{{ route('users.edit', auth()->id()) }}" class="text-secondary hover:bg-primary hover:text-primary group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                    <svg class="text-primary hidden lg:block group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6" x-description="Heroicon name: outline/cog" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    Settings
                </a>

                <a href="#" class="text-secondary hover:bg-primary hover:text-primary group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                    <svg class="text-primary hidden lg:block group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    {{ auth()->user()->name }}
                </a>
            </div>
        </nav>
    </div>
</div>
