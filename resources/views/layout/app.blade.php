<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('ui-kit/dist/assets/css/tailwind.css') }}" />
    <link rel="stylesheet" href="{{ asset('ui-kit/dist/assets/css/icons.css') }}" />
    <link rel="icon" type="image/png" href="{{ asset('ui-kit/dist/assets/images/pk/favicon-96x96.png') }}"
        sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('ui-kit/dist/assets/images/pk/favicon.svg') }}">
    <link rel="shortcut icon" href="{{ asset('ui-kit/dist/assets/images/pk/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('ui-kit/dist/assets/images/pk/apple-touch-icon.png') }}" />
    <link rel="manifest" href="{{ asset('ui-kit/dist/assets/images/pk/site.webmanifest') }}" />
    @stack('styles')
    <title>@yield('title', 'Khalid El Bekay')</title>
</head>

<body class="bg-gray-100 dark:bg-gray-900 bg-[url('../images/bg-body.png')]">
    {{-- @include('layout.navbar') --}}
    <div class="min-h-[calc(100vh-138px)] relative pb-14">
        @yield('content')
    </div>
    <script src="{{ asset('ui-kit/dist/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('ui-kit/dist/assets/js/app.js') }}"></script>
    <script src="{{ asset('ui-kit/dist/assets/jswidth.js') }}"></script>
    @stack('scripts')
</body>

</html>
