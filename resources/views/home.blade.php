@extends('layout.app')
@section('title', 'Khalid El Bekay')
@push('styles')
    {{-- <link rel="stylesheet" href="{{ asset('ui-kit/dist/assets/libs/swiper/swiper-bundle.min.css') }}"> --}}
@endpush
@section('content')

    <div class="relative">

        <section class="h-screen flex items-center">
            <div class="container mx-auto px-6 ">
                <div class="flex flex-col md:flex-row justify-between">
                    <div class="w-full md:w-1/2 text-left md:order-1">
                        <h1 id="ha"
                            class="w-full text-4xl text-gray-500 md:text-6xl md:text-white lg:text-7xl lg:text-black font-bold mb-6">
                            Khalid <span class="whitespace-nowrap">El Bekay</span>
                        </h1>
                    </div>
                    <div class="w-full md:w-1/2 text-right md:order-2">
                        <h1 id="haha"
                            class="w-full text-4xl text-gray-500 md:text-6xl md:text-white lg:text-7xl lg:text-black font-bold mb-6">
                            <span class="whitespace-nowrap" style="font-family: 'Maghribi', sans-serif;">خالد البكاي</span>
                        </h1>
                    </div>
                </div>

            </div>
        </section>

        <div class="container mx-auto px-4 md:px-0 lg:px-0 xl:px-0 relative mt-4">

            <div class="card h-full">
                <div class="card-header">
                    <h4 class="card-title">Articles</h4>
                </div>
                <div class="p-2">
                    <ol class="list-none rounded ">
                        <li
                            class="p-2 text-slate-700 dark:text-slate-400 border-b border-slate-200 dark:border-slate-700 active active:bg-primary-500 active:text-white">
                            <i class="mdi mdi-circle-medium
 text-gray-500 active:text-white"></i> <a href="#"
                                class="font-semibold text-blue-600 dark:text-blue-500 hover:underline mb-2 ">
                                About khalid elbekay work by dr. Raquel Medina</a>
                        </li>
                        <li
                            class="p-2 text-slate-700 dark:text-slate-400 border-b border-slate-200 dark:border-slate-700 active:bg-primary-500 active:text-white">
                            <i class="mdi mdi-circle-medium
 text-gray-500 active:text-white"></i> <a href="#"
                                class="font-semibold text-blue-600 dark:text-blue-500 hover:underline mb-2 ">
                                Khalid El Bekay Africa</a>
                        </li>
                        <li
                            class="p-2 text-slate-700 dark:text-slate-400 border-slate-200 dark:border-slate-700 active:bg-primary-500 active:text-white">
                            <i class="mdi mdi-circle-medium
 text-gray-500 active:text-white"></i> <a href="#"
                                class="font-semibold text-blue-600 dark:text-blue-500 hover:underline mb-2 ">
                                مقال عن خالد البكاي</a>
                        </li>
                    </ol>
                </div><!--end card-body-->
            </div> <!--end card-->
        </div>
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
                                                <h6 class="font-medium text-sm text-slate-700 block dark:text-slate-400">
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
                                                <h6 class="font-medium text-sm text-slate-700 block dark:text-slate-400">
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
                                                <h6 class="font-medium text-sm text-slate-700 block dark:text-slate-400">
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
                                                <input type="text" id="name" class="form-control" placeholder="Name"
                                                    required>
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
