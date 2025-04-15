@extends('layout.app')
@section('title', 'Khalid El Bekay\'s CV')
@push('styles')
    {{-- <link rel="stylesheet" href="{{ asset('ui-kit/dist/assets/libs/swiper/swiper-bundle.min.css') }}"> --}}
@endpush
@section('content')
    <div class="card-body h-[510px]" data-simplebar>
        <div class="relative wrap overflow-hidden p-10 h-full">
            <div
                class="absolute border-opacity-20 border-dashed dark:border-opacity-95  border-slate-700 h-full border left-auto md:left-[50%]">
            </div>
            <!-- right timeline -->
            <div class="mb-8 flex justify-start md:justify-between  items-center w-full right-timeline">
                <div class="order-1 w-auto md:w-5/12"></div>
                <div
                    class="z-20 flex items-center order-1 bg-gray-200 dark:bg-slate-700 shadow-xl w-8 h-8 rounded-full -ml-4 md:ml-0">
                    <h1 class="mx-auto font-semibold text-lg text-gray-800 dark:text-slate-300">1</h1>
                </div>
                <div class="order-1 bg-gray-300 rounded-lg shadow-xl w-11/12 md:w-5/12 px-6 py-4 ml-2 md:ml-0">
                    <h3 class="mb-3 font-bold text-gray-800 text-xl"> Early Years (1980s–1990s)</h3>
                    <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">Lorem Ipsum is simply dummy
                        text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                        text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                        type specimen book.</p>
                </div>
            </div>

            <!-- left timeline -->
            <div class="mb-8 flex justify-start md:justify-between md:flex-row-reverse items-center w-full left-timeline">
                <div class="order-1 w-auto md:w-5/12"></div>
                <div
                    class="z-20 flex items-center order-1 bg-gray-200 dark:bg-slate-700 shadow-xl w-8 h-8 rounded-full -ml-4 md:ml-0">
                    <h1 class="mx-auto text-gray-800 font-semibold text-lg dark:text-slate-300">2</h1>
                </div>
                <div class="order-1 bg-red-400 rounded-lg shadow-xl w-11/12 md:w-5/12 px-6 py-4 ml-2 md:ml-0">
                    <h3 class="mb-3 font-bold text-white text-xl">Transition to Abstraction (2000s)</h3>
                    <p class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">Lorem Ipsum is
                        simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book.</p>
                </div>
            </div>

            <!-- right timeline -->
            <div class="mb-8 flex justify-start md:justify-between  items-center w-full right-timeline">
                <div class="order-1 w-auto md:w-5/12"></div>
                <div
                    class="z-20 flex items-center order-1 bg-gray-200 dark:bg-slate-700 shadow-xl w-8 h-8 rounded-full -ml-4 md:ml-0">
                    <h1 class="mx-auto font-semibold text-lg text-gray-800 dark:text-slate-300">3</h1>
                </div>
                <div class="order-1 bg-gray-300 rounded-lg shadow-xl w-11/12 md:w-5/12 px-6 py-4 ml-2 md:ml-0">
                    <h3 class="mb-3 font-bold text-gray-800 text-xl">Mature Phase (2010s–Present)</h3>
                    <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">Lorem Ipsum is simply dummy
                        text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                        text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                        type specimen book.</p>
                </div>
            </div>

            <!-- left timeline -->
            {{-- <div class="mb-8 flex justify-start md:justify-between md:flex-row-reverse items-center w-full left-timeline">
                <div class="order-1 w-auto md:w-5/12"></div>
                <div
                    class="z-20 flex items-center order-1 bg-gray-200 dark:bg-slate-700 shadow-xl w-8 h-8 rounded-full -ml-4 md:ml-0">
                    <h1 class="mx-auto text-gray-800 font-semibold text-lg dark:text-slate-300">4</h1>
                </div>
                <div class="order-1 bg-red-400 rounded-lg shadow-xl w-11/12 md:w-5/12 px-6 py-4 ml-2 md:ml-0">
                    <h3 class="mb-3 font-bold text-white text-xl">First Trade</h3>
                    <p class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">Lorem Ipsum is
                        simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book.</p>
                </div>
            </div> --}}
        </div>
    </div><!--end card-body-->
@endsection
