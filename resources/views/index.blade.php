<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('ui-kit/dist/assets/css/tailwind.css') }}" />
    <link rel="icon" type="image/png" href="{{ asset('ui-kit/dist/assets/images/pk/favicon-96x96.png') }}"
        sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('ui-kit/dist/assets/images/pk/favicon.svg') }}">
    <link rel="shortcut icon" href="{{ asset('ui-kit/dist/assets/images/pk/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('ui-kit/dist/assets/images/pk/apple-touch-icon.png') }}" />
    <link rel="manifest" href="{{ asset('ui-kit/dist/assets/images/pk/site.webmanifest') }}" />
</head>

<body>
    <div class="fixed inset-0 -z-10 h-screen">
        <img src="{{ asset('ui-kit/dist/assets/images/full-banner1.jpg') }}" alt="Hero Image"
            class="h-full w-full object-cover" />
    </div>
    <div class="relative mt-custom overflow-hidden">
        <section class=" flex">
            <div class="container mx-auto px-6 ">
                <h1 class="text-6xl md:text-6xl md:text-white lg:text-7xl lg:text-black font-bold mb-6">
                    Khalid El Bekay
                </h1>
                <p class="text-xl md:text-2xl mb-8 max-w-2xl"><b>-</b> Coming Soon...</p>
            </div>
        </section>
    </div>
    <script src="{{ asset('ui-kit/dist/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('ui-kit/dist/assets/js/app.js') }}"></script>
</body>
