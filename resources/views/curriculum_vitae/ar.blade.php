@extends('layout.app')
@section('title', 'السيرة الذاتية لخالد البكاي')
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
        <div class="md:col-span-4 lg:col-span-2 xl:col-span-4 self-center">
            <h3
                class="text-slate-800 dark:text-slate-200 text-center text-2xl md:text-2xl lg:text-lg xl:text-2xl font-bold leading-8 py-2 md:py-2 lg:py-1 xl:py-2">
                <span class="inline-block xl:block">خالد البكاي</span>
            </h3>
            <div class="text-center text-slate-400 text-base md:text-base lg:text-sm xl:text-base font-medium py-3">
                السيرة الذاتية — النسخة العربية
            </div>
            <div class="text-center py-3 md:mb-3 lg:mb-0 xl:mb-3">
                <button
                    class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">تحميل</button>
            </div>
        </div>
    </div>

    <div class="col-span-12 md:col-span-12 lg:col-span-4 mt-4 ">
        <div class="card">
            <div class="card-body border-b rounded border-dashed dark:border-gray-700">
                <h6 class="font-semibold text-sm uppercase text-slate-400 text-right">نبذة</h6>
            </div>
            <div class="card-body mx-2">
                <div class="text-slate-500 text-[15px] mb-4 text-right leading-relaxed" dir="rtl">
                    <h6 class="font-bold text-lg mb-2">السيرة الذاتية للفنان خالد البكاي</h6>
                    <p class="mb-4">
                        خالد البكاي، ولد بالدار البيضاء، المغرب عام 1966. يقطن ويشتغل ببرشلونة منذ 1991. يعمل في ورشة بمركز
                        الفن الحديث بيراميدون، برشلونة.
                    </p>
                    <h6 class="font-bold text-lg mb-2">التكوين</h6>
                    <ul class="list-disc pr-5 mb-4" dir="rtl">
                        <li>إجازة في الفنون الجميلة، برشلونة شعبة النقش، 1995</li>
                        <li>دبلوم في الفنون الجميلة، المعهد العالي للفنون الجميلة، تطوان، المغرب، 1990</li>
                        <li>تدريب على النقش، المركز الثقافي الفرنسي تطوان</li>
                    </ul>
                    <h6 class="font-bold text-lg mb-2">معارض فردية</h6>
                    <ul class="list-disc pr-5 mb-4" dir="rtl">
                        <li>2019: BOUSHARI ART GALLERY, KUWAIT</li>
                        <li>2017: SOART GALLERY CASABLANCA</li>
                        <li>2016: ايسباس ريفاج، الرباط، المغرب</li>
                        <li>2015: رواق اسبيرال د أرت كونطيمبورين، نوخا، اسبانيا</li>
                        <li>2014: قصر البيثين، سانتاندير، اسبانيا</li>
                        <li>2012: رواق ديلا كروا، طنجة</li>
                        <li>2010: رواق باب الرواح، الرباط</li>
                    </ul>
                    <h6 class="font-bold text-lg mb-2">معارض جماعية</h6>
                    <ul class="list-disc pr-5 mb-4" dir="rtl">
                        <li>2016: دي دوس ايم ا ش ارت، بيلباو، اسبانيا</li>
                        <li>2015: متحف الملك محمد السادس للفن المعاصر، الرباط</li>
                        <li>2014: رواق انطوني بين يول، طارراغونة، اسبانيا</li>
                        <li>2013: مؤسسة فيلا كازاس، برشلونة، اسبانيا</li>
                        <li>2012: رواق جاد ارت، الدار البيضاء</li>
                    </ul>
                    <h6 class="font-bold text-lg mb-2">عينات عامة وخاصة</h6>
                    <ul class="list-disc pr-5" dir="rtl">
                        <li>متحف محمد السادس للفن المعاصر، الرباط</li>
                        <li>متحف الفنون الشعبية، شانغاي، الصين</li>
                        <li>البنك التجاري المغربي، الدار البيضاء، المغرب</li>
                        <li>مركز التجارة العالمي، برشلونة</li>
                        <li>القصر الملكي، الرباط، المغرب</li>
                    </ul>
                </div>
            </div>
            <div class="card-body border-b rounded border-dashed dark:border-gray-700">
                <h6 class="font-semibold text-sm uppercase text-slate-400 text-right">تواصل</h6>
            </div>
            <div class="card-body text-right">
                <ul class="list-none">
                    {{-- <li class="mb-2">
                    <span class="text-slate-500 text-sm">+1 234 567 890</span>
                    <i class="fa-solid fa-phone text-slate-400 mr-2"></i>
                </li> --}}
                    <li class="mb-2">
                        <span class="text-slate-500 text-sm">contact@khalid-elbekay.com</span>
                        <i class="fa-regular fa-envelope text-slate-400 mr-2"></i>
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
            </div>
        </div>
    </div>
@endSection
