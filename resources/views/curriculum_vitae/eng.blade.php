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
                <div class="text-slate-500 text-[15px] mb-4 leading-relaxed">
                    <h6 class="font-bold text-lg mb-2">Education / Biography</h6>
                    <ul class="list-disc pl-5 mb-4">
                        <li><strong>1990:</strong> Diploma in Fine Arts, Higher Institute of Fine Arts of Tetouan, Morocco.
                        </li>
                        <li>Printmaking internship, French Cultural Center, Tetouan, Morocco.</li>
                        <li><strong>1991:</strong> Moved to Barcelona.</li>
                        <li><strong>1995:</strong> Bachelor’s Degree in Fine Arts, specialization in Printmaking, University
                            of Barcelona.</li>
                        <li><strong>1997:</strong> Joined Centre d’Art Contemporani Piramidón, Barcelona.</li>
                        <li><strong>2001:</strong> Founder of ASSO. Contemporary Artists of Catalonia.</li>
                        <li><strong>2007:</strong> Opened second studio in Casablanca.</li>
                        <li><strong>2024:</strong> Curator, Moroccan Pavilion, FIG BILBAO.</li>
                    </ul>

                    <h6 class="font-bold text-lg mb-2">Solo Exhibitions</h6>
                    <ul class="list-disc pl-5 mb-4">
                        <li><strong>2025:</strong> *Transparency*, Markhiya Art Gallery, Doha, Qatar.</li>
                        <li><strong>2023:</strong> *Africa*, Espiral Art Gallery, Noja, Santander.</li>
                        <li><strong>2022:</strong> *Africa*, Piramidón Art Gallery, Barcelona.</li>
                    </ul>

                    <h6 class="font-bold text-lg mb-2">Group Exhibitions</h6>
                    <ul class="list-disc pl-5 mb-4">
                        <li><strong>2024:</strong> Orient Art Gallery, Amman, Jordan.</li>
                        <li><strong>2023:</strong> Guanlan Printmaking Art Museum, Shenzhen.</li>
                    </ul>

                    <h6 class="font-bold text-lg mb-2">International Fairs</h6>
                    <ul class="list-disc pl-5 mb-4">
                        <li><strong>2024:</strong> Art Madrid, Espiral Gallery | Fig Bilbao, Manera Negra.</li>
                        <li><strong>2022:</strong> Fig Bilbao, Manera Negra.</li>
                    </ul>

                    <h6 class="font-bold text-lg mb-2">Public and Private Collections</h6>
                    <p>
                        Royal Palace, Morocco | World Trade Center, Barcelona | Watercolor Museum, Llançà | BMC Bank,
                        Morocco | Hotel Nafis, Marrakech |
                        Ethnological Museum, Arbucies | City Hall of Salou | Higher Institute of Fine Arts, Tetouan |
                        Piramidón Art Center, Barcelona |
                        Saadi Palace Hotel, Marrakech | SG Bank, Casablanca | CNIA, Casablanca | Ministry of the Interior,
                        Rabat | Ministry of Finance, Rabat |
                        Parliament, Rabat | NH Hotels (Barcelona, Milan, Lisbon, Nice, Madrid) | ONCF Station, Rabat-Ville |
                        CDG, Rabat | Ministry of Education, Rabat |
                        MV Museum, Rabat and Marrakech | Mamounia Palace, Marrakech.
                    </p>
                </div>
            </div>

            <div class="card-body border-b rounded border-dashed dark:border-gray-700">
                <h6 class="font-semibold text-sm uppercase text-slate-400">Contact</h6>
            </div><!--end card-body-->
            <div class="card-body">
                <ul class="list-none mb-3">
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
