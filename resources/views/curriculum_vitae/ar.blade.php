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
            <p class="text-slate-500 text-[15px] mb-4 text-right">
                <strong>خالد البكاي</strong> هو فنان معاصر مغربي-إسباني مشهور، معروف بمزجه الفريد بين الثقافات الشرقية والغربية في أعماله الفنية.<br><br>

                <strong>السيرة الذاتية</strong><br>
                <strong>تاريخ الميلاد:</strong> 1966 في الدار البيضاء، المغرب<br>
                <strong>الدراسة:</strong> تخرج من المعهد العالي للفنون الجميلة بتطوان، المغرب (1990) درس فن الحفر في كلية الفنون الجميلة في برشلونة<br>
                <strong>الإقامة:</strong> يقيم بين برشلونة والدار البيضاء، ولديه مرسم في كلتا المدينتين<br><br>

                <strong>الأسلوب والتقنيات الفنية</strong><br>
                الكولاج والخامات المختلطة: يستخدم طبقات من الورق الرمادي أو الأبيض على الخشب بدون أدوات حادة -<br>
                المزج الثقافي: يمزج بين التأثيرات المغربية والمتوسطية بألوان زاهية -<br>
                التطور: بدأ بأسلوب تصويري ثم انتقل إلى التجريد، وأضاف لاحقًا الخط الصيني -<br><br>

                <strong>المواضيع الأساسية</strong><br>
                الهوية المزدوجة: يجمع بين التراث المغربي والحياة الكتالونية -<br>
                الطبيعة والأرض: يصف عمله بأنه "حوار مع الأرض" -<br><br>

                <strong>المعارض والتكريم</strong><br>
                شارك في معارض دولية (MIART)، معرض بولونيا الفني، البندقية، معارض فردية في الرباط، جنيف، مدريد -<br>
                وصل إلى نهائيات بينالي طرخونة الثلاثين للرسم (1997) -<br>
                توجد أعماله في القصر الملكي بالمغرب، مركز التجارة العالمي في برشلونة، ومتحف الألوان المائية في خيرونا -<br><br>


                <strong>اقتباسات</strong><br>
                "أعمالي هي مزيج من الثقافتين الغربية والشرقية... لوحاتي تجسد حواري مع الأرض"<br>
                "الهجرة هي عطاء وتلقي. نحن سفراء ثقافتنا"
            </p>
            <ul class="list-none text-right">
                <li class="mb-2">
                    <span class="text-slate-500 text-sm">06 يونيو 1966</span>
                    <i class="fa-solid fa-cake-candles text-slate-400 mr-2"></i>
                </li>
                <li class="mb-2">
                    <span class="text-slate-500 text-sm">الإنجليزية، الفرنسية، الإسبانية</span>
                    <i class="fa-solid fa-language text-slate-400 mr-2"></i>
                </li>
                <li class="mb-2">
                    <span class="text-slate-500 text-sm">المغرب</span>
                    <i class="far fa-flag text-slate-400 mr-2"></i>
                </li>
                <li class="mb-2">
                    <span class="text-slate-500 text-sm">القراءة، السفر</span>
                    <i class="fa-solid fa-shield-halved text-slate-400 mr-2"></i>
                </li>
            </ul>
        </div>
        <div class="card-body border-b rounded border-dashed dark:border-gray-700">
            <h6 class="font-semibold text-sm uppercase text-slate-400 text-right">تواصل</h6>
        </div>
        <div class="card-body text-right">
            <ul class="list-none mb-3">
                <li class="mb-2">
                    <span class="text-slate-500 text-sm">+1 234 567 890</span>
                    <i class="fa-solid fa-phone text-slate-400 mr-2"></i>
                </li>
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
