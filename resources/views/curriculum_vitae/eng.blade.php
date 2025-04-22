@extends('layout.app')
@section('title', 'Khalid El Bekay\'s CV')
@push('styles')
    {{-- <link rel="stylesheet" href="{{ asset('ui-kit/dist/assets/libs/swiper/swiper-bundle.min.css') }}"> --}}
@endpush
@section('content')

    <div
        class="h-full bg-white shadow rounded-md w-full p-4 relative overflow-hidden grid md:gap-4 lg:gap-2 xl:gap-4 md:grid-cols-1 lg:grid-cols-4">
        <div class="md:col-span-4 lg:col-span-2 xl:col-span-4 block dark:hidden">
            <img src="{{ asset('ui-kit/dist/assets/images/colorful.jpg') }}" alt=""
                class="rounded-lg mx-auto w-72 block">
        </div>
        <div class="md:col-span-4 lg:col-span-2 xl:col-span-4 self-center" {{-- style="background-image: url('{{ asset('ui-kit/dist/assets/images/artwork/elbekay-1.png') }}');" --}}>
            <h3
                class="text-slate-800 dark:text-slate-200 text-center text-2xl md:text-2xl lg:text-lg xl:text-2xl font-bold leading-8 py-2 md:py-2 lg:py-1 xl:py-2">
                <span class="inline-block xl:block">Khalid El Bekay</span>

            </h3>
            <div class="text-center text-slate-400 text-base md:text-base lg:text-sm xl:text-base font-medium py-3">
                Curriculum Vitae ---English Version</div>
            <div class="text-center py-3 md:mb-3 lg:mb-0 xl:mb-3">
                <button
                    class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">Download</button>
            </div>
        </div>
    </div>
    <div class="col-span-12 md:col-span-12 lg:col-span-4 mt-4 ">
        <div class="card">
            <div class="card-body border-b rounded border-dashed dark:border-gray-700">
                <h6 class="font-semibold text-sm uppercase text-slate-400">About</h6>
            </div><!--end card-body-->
            <div class="card-body mx-2">
                <p class="text-slate-500 text-[15px] mb-4">
                    <strong>Khalid El Bekay</strong> is a renowned Moroccan-Spanish contemporary artist known for his
                    unique blend of Eastern and Western cultural influences in his artwork.<br><br>

                    <strong>Biography:</strong><br>
                    <strong>Born:</strong> 1966 in Casablanca, Morocco.<br>
                    <strong>Education:</strong> Graduated from the Higher Institute of Fine Arts in Tetouan, Morocco
                    (1990). Studied engraving at the Faculty of Fine Arts in Barcelona.<br>
                    <strong>Residence:</strong> Splits time between Barcelona and Casablanca, maintaining studios in
                    both cities.<br><br>

                    <strong>Artistic Style & Techniques:</strong><br>
                    - Collage & Mixed Media: Layers gray or white paper on wood without sharp tools<br>
                    - Cultural Fusion: Merges Moroccan and Mediterranean influences with vibrant colors<br>
                    - Evolution: From figurative to abstract, later incorporating Chinese calligraphy<br><br>

                    <strong>Key Themes:</strong><br>
                    - Dual Identity: Bridges Moroccan heritage and Catalan life<br>
                    - Nature & Earth: Describes work as a "dialogue with the earth"<br><br>

                    <strong>Exhibitions & Recognition:</strong><br>
                    - Exhibited globally (MIART, Bologna Art Fair, Venice, solo shows in Rabat, Geneva, Madrid)<br>
                    - Finalist at 30th Tarragona Painting Biennial (1997)<br>
                    - Works in Royal Palace of Morocco, World Trade Center Barcelona, Watercolor Museum of
                    Girona<br><br>

                    <strong>Quotes:</strong><br>
                    "My work is a mixture of Western and Eastern cultures... My paintings materialize my dialogue with
                    the earth."<br>
                    "Emigrating is giving and receiving. We are ambassadors of our culture."
                </p>
                <ul class="list-none">
                    <li class="mb-2"><i class="fa-solid fa-cake-candles text-slate-400 mr-2"></i>
                        <span class="text-slate-500 text-sm">06 June 1966</span>
                    </li>
                    <li class="mb-2"><i class="fa-solid fa-language text-slate-400 mr-2"></i>
                        <span class="text-slate-500 text-sm">English, French, Spanish</span>
                    </li>
                    <li class="mb-2"><i class="far fa-flag text-slate-400 mr-2"></i>
                        <span class="text-slate-500 text-sm">Morocco</span>
                    </li>
                    <li class="mb-2"><i class="fa-solid fa-shield-halved text-slate-400 mr-2"></i>
                        <span class="text-slate-500 text-sm">Reading, journey</span>
                    </li>
                </ul>
            </div>
            <div class="card-body border-b rounded border-dashed dark:border-gray-700">
                <h6 class="font-semibold text-sm uppercase text-slate-400">Contact</h6>
            </div><!--end card-body-->
            <div class="card-body">
                <ul class="list-none mb-3">
                    <li class="mb-2"><i class="fa-solid fa-phone text-slate-400 mr-2"></i>
                        <span class="text-slate-500 text-sm">+1 234 567 890</span>
                    </li>
                    <li class="mb-2"><i class="fa-regular fa-envelope text-slate-400 mr-2"></i>
                        <span class="text-slate-500 text-sm">contact@khalid-elbekay.com</span>
                    </li>
                </ul>
                <button
                    class="py-1 px-2 text-sm font-medium text-blue-500 bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700">
                    <i class="ti ti-brand-linkedin text-base"></i>
                </button>
                <button
                    class="py-1 px-2 text-sm font-medium text-red-500 bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-red-500">
                    <i class="ti ti-brand-facebook text-base"></i>
                </button>
                <button
                    class="py-1 px-2 text-sm font-medium text-sky-500 bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-sky-500 focus:z-10 ">
                    <i class="ti ti-brand-twitter   text-base"></i>
                </button>
                <button
                    class="py-1 px-2 text-sm font-medium text-orange-500 bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-orange-500 ">
                    <i class="ti ti-brand-instagram   text-base"></i>
                </button>
            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end col-->
@endSection
