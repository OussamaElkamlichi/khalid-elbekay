@extends('layout.app')
@section('title', 'Khalid El Bekay\'s CV')
@push('styles')
@endpush
@section('content')
    <div class="card-body h-[510px]" data-simplebar>
        <div class="relative wrap overflow-hidden p-10 h-full">
            <div
                class="absolute border-opacity-20 border-dashed dark:border-opacity-95  border-slate-700 h-full border left-auto md:left-[50%]">
            </div>

            <div class="mb-8 flex justify-start md:justify-between  items-center w-full right-timeline">
                <div class="order-1 w-auto md:w-5/12"></div>
                <div
                    class="z-20 flex items-center order-1 bg-gray-200 dark:bg-slate-700 shadow-xl w-8 h-8 rounded-full -ml-4 md:ml-0">
                    <h1 class="mx-auto font-semibold text-lg text-gray-800 dark:text-slate-300">1</h1>
                </div>
                <div class="order-1 bg-gray-300 rounded-lg shadow-xl w-11/12 md:w-5/12 px-6 py-4 ml-2 md:ml-0">
                    <h3 class="mb-3 font-bold text-gray-800 text-xl">Bambu VIII</h3>
                    <img src="{{ asset('ui-kit/dist/assets/images/chronology/1.jpg') }}" class="rounded-md aspect-square"
                        alt="">
                    <ul class="list-inside text-center pt-4">
                        <li class="mb-1 text-slate-700 dark:text-slate-400"> Ink, collage, acrylic on canvas</li>
                        <li class="mb-1 text-slate-700 dark:text-slate-400"> 120 x 90 cm</li>
                        <li class="mb-1 text-slate-700 dark:text-slate-400">Dated 2020</li>
                        <li class="mb-1 text-red-500 dark:text-slate-400 font-semibold">It can be commissioned</li>
                    </ul>
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
                    <h3 class="mb-3 font-bold text-white text-xl">Bambu XIV</h3>
                    <img src="{{ asset('ui-kit/dist/assets/images/chronology/2.jpg') }}" class="rounded-md aspect-square"
                        alt="">
                    <ul class="list-inside text-center pt-4">
                        <li class="mb-1 text-white dark:text-slate-400"> Ink, collage, acrylic on canvas</li>
                        <li class="mb-1 text-white dark:text-slate-400"> 100 x 200 cm</li>
                        {{-- <li class="mb-1 text-white dark:text-slate-400">Dated 2020</li> --}}
                        <li class="mb-1 text-white dark:text-slate-400 font-semibold">It can be commissioned</li>
                    </ul>
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
                    <h3 class="mb-3 font-bold text-gray-800 text-xl">Te-vert VI</h3>
                    <img src="{{ asset('ui-kit/dist/assets/images/chronology/3.jpg') }}" class="rounded-md aspect-square"
                        alt="">
                    <ul class="list-inside text-center pt-4">
                        <li class="mb-1 text-slate-700 dark:text-slate-400"> Mixed Media on Canvas</li>
                        <li class="mb-1 text-slate-700 dark:text-slate-400"> 150 x 150 cm</li>
                        <li class="mb-1 text-slate-700 dark:text-slate-400">Dated 2016</li>
                        <li class="mb-1 text-red-500 dark:text-slate-400 font-semibold">It can be commissioned</li>
                    </ul>
                </div>
            </div>

            <!-- left timeline -->
            <div class="mb-8 flex justify-start md:justify-between md:flex-row-reverse items-center w-full left-timeline">
                <div class="order-1 w-auto md:w-5/12"></div>
                <div
                    class="z-20 flex items-center order-1 bg-gray-200 dark:bg-slate-700 shadow-xl w-8 h-8 rounded-full -ml-4 md:ml-0">
                    <h1 class="mx-auto text-gray-800 font-semibold text-lg dark:text-slate-300">4</h1>
                </div>
                <div class="order-1 bg-red-400 rounded-lg shadow-xl w-11/12 md:w-5/12 px-6 py-4 ml-2 md:ml-0">
                    <h3 class="mb-3 font-bold text-white text-xl">Beijing I</h3>
                    <img src="{{ asset('ui-kit/dist/assets/images/chronology/4.jpg') }}" class="rounded-md aspect-square"
                        alt="">
                    <ul class="list-inside text-center pt-4">
                        <li class="mb-1 text-slate-700 dark:text-slate-400"> Mixed Media on Canvas</li>
                        <li class="mb-1 text-slate-700 dark:text-slate-400"> 150 x 150 cm</li>
                        <li class="mb-1 text-slate-700 dark:text-slate-400">Dated 2016</li>
                        <li class="mb-1 text-white dark:text-slate-400 font-semibold">It can be commissioned</li>
                    </ul>
                </div>

            </div>

            <div class="mb-8 flex justify-start md:justify-between  items-center w-full right-timeline">
                <div class="order-1 w-auto md:w-5/12"></div>
                <div
                    class="z-20 flex items-center order-1 bg-gray-200 dark:bg-slate-700 shadow-xl w-8 h-8 rounded-full -ml-4 md:ml-0">
                    <h1 class="mx-auto font-semibold text-lg text-gray-800 dark:text-slate-300">5</h1>
                </div>
                <div class="order-1 bg-gray-300 rounded-lg shadow-xl w-11/12 md:w-5/12 px-6 py-4 ml-2 md:ml-0">
                    <h3 class="mb-3 font-bold text-gray-800 text-xl">Bambu VIII</h3>
                    <img src="{{ asset('ui-kit/dist/assets/images/chronology/1.jpg') }}" class="rounded-md aspect-square"
                        alt="">
                    <ul class="list-inside text-center pt-4">
                        <li class="mb-1 text-slate-700 dark:text-slate-400"> Ink, collage, acrylic on canvas</li>
                        <li class="mb-1 text-slate-700 dark:text-slate-400"> 120 x 90 cm</li>
                        <li class="mb-1 text-slate-700 dark:text-slate-400">Dated 2020</li>
                        <li class="mb-1 text-red-500 dark:text-slate-400 font-semibold">It can be commissioned</li>
                    </ul>
                </div>
            </div>

        </div><!--end card-body-->
    @endsection
