<div class="flex flex-col items-center justify-center w-full rounded-lg p-12 text-center hover:border-primary">
    <div class="flex text-ternary">
        <img src="https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/illustrations/No_data_re_kwbl.svg"
            alt=""
            class="h-40 w-40"
        >
    </div>
    <div class="mt-4">
        <span class="text-secondary">
            {{ $title ?? __('No results to show.') }}
        </span>
    </div>
    <div class="mt-2">
        <span class="mt-1 text-base text-primary text-center flex">
            {{ $placeholder }}
        </span>
    </div>
    @isset($actions)
        <div class="mt-4">
            {{ $actions }}
        </div>
    @endisset
</div>
