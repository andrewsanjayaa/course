<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <head>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    </head>
    @if (Route::currentRouteName() != 'category.detail.article')
        <div class="py-2">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100 text-center uppercase text-2xl">
                        @if (Route::currentRouteName() === 'dashboard')
                            {{ __('Category') }}
                        @endif
                        @if (Route::currentRouteName() === 'category.detail')
                            {{ __('Detail Category') }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endif


    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if (Route::currentRouteName() === 'dashboard')
                        @include('category.card')
                    @endif
                    @if (Route::currentRouteName() === 'category.detail')
                        @include('category.detail')
                    @endif
                    @if (Route::currentRouteName() === 'category.detail.article')
                        @include('category.article')
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="py-0">
        @include('footer')
    </div>
</x-app-layout>
