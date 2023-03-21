<!DOCTYPE html>
<html id="html" data-theme="night" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-base-200">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-base-300 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 ">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                <div class="py-12">
                    <x-success-messsage>

                    </x-success-messsage>

                    <x-error-message>

                    </x-error-message>
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                        <div class=" overflow-hidden shadow-sm sm:rounded-xl">

                            <div class="p-6 bg-base-100 border border-base-300 min-h-screen">
                {{ $slot }}
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        @livewireScripts
    </body>
@include('layouts.footer')
</html>
