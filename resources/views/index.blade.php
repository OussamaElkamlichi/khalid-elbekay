@extends('layout.app')
@section('title', 'Khalid El Bekay')
@push('styles')
    <link rel="stylesheet" href="{{ asset('ui-kit/dist/assets/libs/swiper/swiper-bundle.min.css') }}">
@endpush
@section('content')
    <!-- Full-screen hero behind navbar -->
    <div class="fixed inset-0 -z-10">
        <img src="{{ asset('ui-kit/dist/assets/images/full-banner.jpg') }}" alt="Hero Image"
            class="h-full w-full object-cover" />
    </div>

    <!-- Content container (starts below navbar) -->
    <div class="relative">
        <!-- Hero content (first viewport) -->
        <section class="h-screen flex items-center">
            <div class="container mx-auto px-6 ">
                <h1 class="text-6xl md:text-6xl md:text-white lg:text-7xl lg:text-black font-bold mb-6">
                    Khalid El Bekay
                </h1>
                <p class="text-xl md:text-2xl mb-8 max-w-2xl"><b>-</b> Artiste peinture</p>
                {{-- <button class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg">
                    Call to Action
                </button> --}}
            </div>
        </section>

        {{-- <div class="w-full bg-blue-200"> --}}
        <div class="container mx-auto  min-h-screen  relative pb-14 ">
            <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                <div class="sm:col-span-12  md:col-span-12 lg:col-span-12 xl:col-span-12 ">
                    <div class="card h-full">
                        <div class="card-body">
                            <div class="grid md:grid-cols-9 lg:grid-cols-9 xl:grid-cols-10 gap-4">

                                <div class="col-span-10 md:col-span-3 lg:col-span-3 xl:col-span-2">
                                    <div class="card">
                                        <div class="card-body relative">
                                            <a href="#" class="block">
                                                <img src="{{ asset('ui-kit/dist/assets/images/artwork/2278923_1_m.jpg') }}"
                                                class="rounded-md aspect-square" alt="">
                                            </a>
                                        </div><!--end card-body-->
                                        <div class="card-body pt-0">
                                            <div class="flex justify-between">
                                                <div class="self-center">
                                                    <h6
                                                        class="font-medium text-[15px] text-slate-700 block dark:text-slate-300">
                                                        Artwork Number One</h6>
                                                    <span class="text-xs text-slate-400 font-medium block">Malaga</span>
                                                </div>
                                                <div class="self-center">
                                                    <span class="text-xs text-slate-400 font-medium">Size</span>
                                                    <h6
                                                        class="font-medium text-sm text-slate-700 block dark:text-slate-400">
                                                        75/24</h6>
                                                </div>
                                            </div>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->

                                <div class="col-span-10 md:col-span-3 lg:col-span-3 xl:col-span-2">
                                    <div class="card">
                                        <div class="card-body relative">
                                            <a href="#" class="block">
                                                <img src="{{ asset('ui-kit/dist/assets/images/artwork/elbekay-2.png') }}"
                                                class="rounded-md aspect-square" alt="">
                                            </a>
                                        </div><!--end card-body-->
                                        <div class="card-body pt-0">
                                            <div class="flex justify-between">
                                                <div class="self-center">
                                                    <h6
                                                        class="font-medium text-[15px] text-slate-700 block dark:text-slate-300">
                                                        Artwork Number 2 </h6>
                                                    <span class="text-xs text-slate-400 font-medium block">Qatar</span>
                                                </div>
                                                <div class="self-center">
                                                    <span class="text-xs text-slate-400 font-medium">Size</span>
                                                    <h6
                                                        class="font-medium text-sm text-slate-700 block dark:text-slate-400">
                                                       50/50</h6>
                                                </div>
                                            </div>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->

                                <div class="col-span-10 md:col-span-3 lg:col-span-3 xl:col-span-2">
                                    <div class="card">
                                        <div class="card-body relative">
                                            <a href="#" class="block">
                                                <img src="{{ asset('ui-kit/dist/assets/images/artwork/elbekay-1.png') }}"
                                                class="rounded-md aspect-square"alt="">
                                            </a>
                                        </div><!--end card-body-->
                                        <div class="card-body pt-0">
                                            <div class="flex justify-between">
                                                <div class="self-center">
                                                    <h6
                                                        class="font-medium text-[15px] text-slate-700 block dark:text-slate-300">
                                                        Artwork Number 2</h6>
                                                    <span class="text-xs text-slate-400 font-medium block">Tunisia</span>
                                                </div>
                                                <div class="self-center">
                                                    <span class="text-xs text-slate-400 font-medium">Size</span>
                                                    <h6
                                                        class="font-medium text-sm text-slate-700 block dark:text-slate-400">
                                                        100/80</h6>
                                                </div>
                                            </div>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('scripts')
    <script src="{{ asset('ui-kit/dist/assets/libs/swiper/swiper-bundle.min.js') }}"></script>
    <script src=" {{ asset('ui-kit/dist/assets/js/pages/carousel.init.js') }}"></script>
@endpush
