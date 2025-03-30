<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    @livewireStyles


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/scss/bootstrap.scss', 'resources/css/customization.css'])
    <script src="{{ asset("/assets/vendor/jquery/jquery-3.7.1.min.js") }}"></script>
    <script src="{{ asset("/assets/vendor/DataTables/datatables.min.js") }}"></script>
    <link rel="stylesheet" href="{{ asset("/assets/vendor/DataTables/datatables.min.css") }}">
    <link rel="stylesheet" href="{{ asset("/assets/vendor/fontawesome-free-6.7.2/css/all.min.css") }}">


</head>
<body class="font-sans antialiased">


<div class="min-h-screen bg-gray-100">
    @livewire('navigation-menu')
    <x-banner/>
    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif

    <!-- Page Content -->
    <main>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-2">
                    @yield("content")
                </div>
            </div>
        </div>
    </main>
    <x-toaster-hub />
</div>

@stack('modals')

@livewireScripts
</body>

<script>
    $(document).ready(function () {
        $('.dataTable').DataTable({
            paging: true,
            pageLength: 100,
        });
    });
</script>
</html>
