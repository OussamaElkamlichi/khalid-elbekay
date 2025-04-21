@extends('layout.app')
@section('title', 'Khalid El Bekay')
@push('styles')
    {{-- <link rel="stylesheet" href="{{ asset('ui-kit/dist/assets/libs/swiper/swiper-bundle.min.css') }}"> --}}
@endpush
@section('content')

    <div class="relative">

        <section class="h-screen flex items-center">
            <div class="container mx-auto px-6 ">
                <h1 class="text-6xl md:text-6xl md:text-white lg:text-7xl lg:text-black font-bold mb-6">
                    Khalid <span class="whitespace-nowrap">El Bekay</span>
                </h1>
                <p class="text-xl md:text-2xl mb-8 max-w-2xl"><b>-</b> Artiste peinture</p>
                {{-- <button class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg">
                    Call to Action
                </button> --}}
            </div>
        </section>

        <div class="card-body p-4" data-simplebar>
            <ol class="relative border-l border-dashed border-gray-200 dark:border-gray-700 ml-3">
                <li class="mb-10 ml-16">
                    <span data-tooltip-target="tooltip-light" data-tooltip-style="light"
                        class="flex absolute -left-4 justify-center items-center w-16 h-16">

                        <img src="{{ asset('ui-kit/dist/assets/images/colorful.jpg') }}"
                            alt=""class="rounded-tl-[33%] rounded-tr-[50%] rounded-bl-[50%] rounded-br-[15%] mx-auto block">
                        <span id="tooltip-light" role="tooltip"
                            class="inline-block absolute invisible z-10 py-2 px-3 text-[12px] font-medium text-gray-900 bg-white rounded-lg border border-slate-200 shadow-sm opacity-0 tooltip">
                            Tooltip content
                            <span class="tooltip-arrow" data-popper-arrow></span>
                        </span>
                    </span>
                    <div
                        class="justify-between items-center p-4 bg-white rounded-lg border border-gray-200 shadow-sm sm:flex dark:bg-slate-800 dark:border-slate-700">
                        {{-- <span class="mb-1 text-xs font-normal text-gray-400 sm:order-last sm:mb-0">just now</span> --}}
                        <div class="text-base font-normal text-gray-500 dark:text-gray-300 w-full ">
                            <a href="{{ route('cv.english') }}"
                                class="font-semibold text-blue-600 dark:text-blue-500 hover:underline mb-2 inline-block">Short
                                biography
                            </a><br>
                            Born in 1966 in Casablanca, Khalid El Bekay graduated from the Higher Institute of Fine Arts in
                            Tetouan in 1990 and graduated from the Faculty of Fine Arts in Barcelona, ​​engraving section.
                            His first exhibition dates from 1995 in Barcelona. In 1997, he was finalist of the 30th Biennial
                            of painting of Tarragona.
                            {{-- <span
                                class="bg-gray-100 text-gray-800 text-xs font-normal mr-2 px-2.5 py-0.5 rounded dark:bg-gray-600 dark:text-gray-300">USA
                                Group</span> --}}
                        </div>
                    </div>
                </li>
            </ol>
        </div>

        <div class="container mx-auto px-4 md:px-0 lg:px-0 xl:px-0 relative mt-4">
            <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                <div class="sm:col-span-12  md:col-span-12 lg:col-span-12 xl:col-span-12 ">
                    <div class="card h-full">
                        <div class="card-body">
                            <span><b>Highlighted Artworks </b></span>
                            <div class="grid md:grid-cols-9 lg:grid-cols-9 xl:grid-cols-10 gap-4 mt-3">

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

        <div class="container mx-auto px-4 md:px-0 lg:px-0 xl:px-0 relative mt-4">
            <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                <div class="sm:col-span-12  md:col-span-12 lg:col-span-12 xl:col-span-12 ">
                    <div class="card h-full">
                        <div class="grid md:grid-cols-9 lg:grid-cols-9 xl:grid-cols-10 gap-4 mt-3">
                            <div class="col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-12">
                                <div class="">
                                    <div class="card-header">
                                        <h4 class="card-title">Have More Questions</h4>
                                    </div><!--end card-header-->
                                    <div class="card-body">
                                        <form>
                                            <div class="w-full flex gap-3">
                                                <div class="mb-6 w-1/2">
                                                    <input type="text" id="name" class="form-control"
                                                        placeholder="Name" required>
                                                </div>
                                                <div class="mb-6  w-1/2">
                                                    <input type="email" id="email" class="form-control"
                                                        placeholder="Email" required>
                                                </div>
                                            </div>
                                            <div class="mb-6">
                                                <input type="text" id="subject" class="form-control"
                                                    placeholder="Subject" required>
                                            </div>
                                            <div class="mb-6">
                                                <textarea id="message" rows="4"
                                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded border border-gray-200  focus:border-blue-500 dark:bg-slate-700 dark:border-slate-600 dark:placeholder-gray-400 dark:text-white  dark:focus:border-primary-500 focus-visible:outline-none"
                                                    placeholder="Your Message..."></textarea>
                                            </div>
                                            <button type="submit"
                                                class="btn bg-blue-500 text-white hover:bg-blue-600">Submit</button>
                                        </form>
                                    </div><!--end card-body-->
                                </div> <!--end card-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-span-12 md:col-span-6 mt-10">
                <!-- Newsletter Section -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Stay Updated</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-4">
                                <label class="block text-sm font-medium mb-2">Subscribe to our Newsletter</label>
                                <input type="email" class="form-control" placeholder="Your email address" required>
                            </div>
                            <button type="submit" class="btn bg-blue-600 hover:bg-blue-700 text-white">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>

            </div> --}}
        </div>

    @endsection
    @push('scripts')
        {{-- <script src="{{ asset('ui-kit/dist/assets/libs/swiper/swiper-bundle.min.js') }}"></script>
    <script src=" {{ asset('ui-kit/dist/assets/js/pages/carousel.init.js') }}"></script> --}}
    @endpush
