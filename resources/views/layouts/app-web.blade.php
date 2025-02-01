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

        {{-- Bootstrap Link --}}
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-pzjw8f+ua7Kw1TIq0v8FqD17rVbh2K1CZ3fZp2N6mE0XkmjUw8E+BwFzj7M4e58y" crossorigin="anonymous">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
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
            <main>
                <div class="flex h-screen">
                    <!-- Sidebar -->
                

                    <!-- Main Content -->
                    <div class="flex-1 p-6">
                        {{-- {{ $slot }} --}}
                        @yield('content')
                    </div>
                </div>
            </main>
        </div>

        <!-- jQuery (required for Bootstrap's JS components) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zyj7p5B+FfXU4d8V7EnB6nZeFInJX0pc9Q2I7oIu" crossorigin="anonymous"></script>

        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0v8FqD17rVbh2K1CZ3fZp2N6mE0XkmjUw8E+BwFzj7M4e58y" crossorigin="anonymous"></script>
    </body>
</html>
