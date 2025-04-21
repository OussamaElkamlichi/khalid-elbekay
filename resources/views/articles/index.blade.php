@extends('layout.app')
@section('title', 'Khalid El Bekay\'s CV')
@push('styles')
    {{-- <link rel="stylesheet" href="{{ asset('ui-kit/dist/assets/libs/swiper/swiper-bundle.min.css') }}"> --}}
@endpush
@section('content')
    <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4 m-5">

        <div class="sm:col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-4">
            <div class="card">
                <a href="#">
                    <img class="rounded-t-lg object-cover"
                        src="https://static.lematin.ma/files/lematin/images/articles/2021/11/0a20bbcba6c88e93e4d1a75c4eb20cdf.png"
                        alt="" />
                </a>
                <div class="card-body">
                    <span
                        class="focus:outline-none text-[12px] bg-green-500/10 text-green-500 dark:text-green-600 rounded font-medium py-1 px-2">Exposition</span>
                    <a href="https://lematin.ma/journal/2021/lartiste-peintre-khalid-el-bekkay-exposition-asilah-on-trouve-creations-papier-toile-racontent-experience-bambou-chine/367492.html"
                        class="my-3 block text-[20px] font-medium tracking-tight text-gray-800 dark:text-white">
                        L’artiste-peintre Khalid El Bekkay : «Dans mon exposition à Asilah, on trouve des créations sur
                        papier et sur toile qui racontent mon expérience avec le bambou en Chine»</a>
                    <p class="font-normal text-gray-500 text-sm dark:text-gray-400">
                        L’artiste maroco-espagnol Khalid El Bekay présente jusqu’au 18 novembre son exposition «Vertical-In»
                        à Asilah.
                    </p>
                    <div class="border-[0.5px] border-dashed border-slate-300 my-4 dark:border-slate-700"></div>
                    <div class="flex flex-wrap justify-between">
                        <div class="flex items-center mb-2">
                            <div class="w-8 h-8 rounded">
                                <img class="w-full h-full overflow-hidden object-cover rounded object-center"
                                    src="https://static.lematin.ma/files/lematin/images/articles/2021/11/0a20bbcba6c88e93e4d1a75c4eb20cdf.png"
                                    alt="logo" />
                            </div>
                            <div class="ml-2">
                                <a tabindex="0"
                                    href="https://lematin.ma/journal/2021/lartiste-peintre-khalid-el-bekkay-exposition-asilah-on-trouve-creations-papier-toile-racontent-experience-bambou-chine/367492.html"
                                    class="cursor-pointer hover:text-gray-500 focus:text-gray-500 text-gray-800 dark:text-gray-100 focus:outline-none focus:underline">
                                    <h5 class=" font-medium text-sm">le Matin</h5>
                                </a>
                                <p tabindex="0"
                                    class="focus:outline-none text-gray-500 dark:text-gray-400 text-xs font-medium">
                                    Asilah, Morocco</p>
                            </div>
                        </div>
                        <a href="https://lematin.ma/journal/2021/lartiste-peintre-khalid-el-bekkay-exposition-asilah-on-trouve-creations-papier-toile-racontent-experience-bambou-chine/367492.html"
                            class="text-primary-500 font-semibold text-sm self-center">Read More <i
                                class="fas fa-arrow-right-long"></i></a>
                    </div>
                </div><!--end card-body-->
            </div>
        </div>

        <div class="sm:col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-4">
            <div class="card">
                <a href="#">
                    <img class="rounded-t-lg object-cover" src="https://www.soart-gallery.com/custom_images/1200x630c/usr/images/exhibitions/main_image_override/15/_i2c6499.jpg"
                        alt="" />
                </a>
                <div class="card-body">
                    <span
                        class="focus:outline-none text-[12px] bg-green-500/10 text-green-500 dark:text-green-600 rounded font-medium py-1 px-2">Exposition</span>
                    <a href="#"
                        class="my-3 block text-[20px] font-medium tracking-tight text-gray-800 dark:text-white">Khalid El Bekay Exhibitions: 30 de Cinquante, Khalid El Bekay, 21 Novembre - 31 Décembre 2017</a>
                    <p class="font-normal text-gray-500 text-sm dark:text-gray-400">
                        Khalid El Bekay - Exhibitions
                    </p>
                    <div class="border-[0.5px] border-dashed border-slate-300 my-4 dark:border-slate-700"></div>
                    <div class="flex flex-wrap justify-between">
                        <div class="flex items-center mb-2">
                            <div class="w-8 h-8 rounded">
                                <img class="w-full h-full overflow-hidden object-cover rounded object-center"
                                    src="https://www.soart-gallery.com/custom_images/1200x630c/usr/images/exhibitions/main_image_override/15/_i2c6499.jpg" alt="logo" />
                            </div>
                            <div class="ml-2">
                                <a tabindex="0"
                                    class="cursor-pointer hover:text-gray-500 focus:text-gray-500 text-gray-800 dark:text-gray-100 focus:outline-none focus:underline">
                                    <h5 class=" font-medium text-sm">Soart Gallery</h5>
                                </a>
                                <p tabindex="0"
                                    class="focus:outline-none text-gray-500 dark:text-gray-400 text-xs font-medium">
                                    Casablanca, Morocco</p>
                            </div>
                        </div>
                        <a href="https://www.soart-gallery.com/artists/34-khalid-el-bekay/exhibitions/"
                            class="text-primary-500 font-semibold text-sm self-center">Read More <i
                                class="fas fa-arrow-right-long"></i></a>
                    </div>
                </div><!--end card-body-->
            </div>
        </div>

    </div>
@endSection
