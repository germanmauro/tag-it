<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        {{-- <link href="{{ asset('css/bootstrap.min.css?v=12') }}" rel="stylesheet"> --}}
        <!-- Scripts -->
        {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
       
        <link href="{{ asset('css/font-awesome/css/all.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('Tables/jquery.dataTables.css') }}">
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="{{ asset('build/assets/app-nGfMv9XH.js') }}"></script>
        <link href="{{ asset('build/assets/app-XgG12z8V.css') }}" rel="stylesheet" type="text/css">
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('Tables/jquery.dataTables.js')}}"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
    <body class="antialiased">
            @if (session()->has('success'))
            @php
                // Clear the flashed message once it has been displayed
                Session::forget('success');
            @endphp
                    <script>
                        swal("Acción correcta","{{session('success')}}", "success");
                    </script>
            @endif
             @if (session()->has('warning'))
                    <script>
                        swal("¡Atención!","{{session('warning')}}", "warning");
                    </script>
                    @php
                        // Clear the flashed message once it has been displayed
                        Session::forget('warning');
                    @endphp
            @endif
            @if (session()->has('error'))
                    <script>
                        swal("¡Atención!","{{session('error')}}", "error");
                    </script>
                    @php
                        // Clear the flashed message once it has been displayed
                        Session::forget('success');
                    @endphp
            @endif
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="p-5">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
