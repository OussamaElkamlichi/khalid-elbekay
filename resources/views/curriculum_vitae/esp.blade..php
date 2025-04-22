@extends('layout.app')
@section('title', 'Currículum de Khalid El Bekay')
@push('styles')
{{-- <link rel="stylesheet" href="{{ asset('ui-kit/dist/assets/libs/swiper/swiper-bundle.min.css') }}"> --}}
@endpush
@section('content')

<div
    class="h-full bg-white shadow rounded-md w-full p-4 relative overflow-hidden grid md:gap-4 lg:gap-2 xl:gap-4 md:grid-cols-1 lg:grid-cols-4">
    <div class="md:col-span-4 lg:col-span-2 xl:col-span-4 block dark:hidden">
        <img src="{{ asset('ui-kit/dist/assets/images/colorful.jpg') }}" alt="" class="rounded-lg mx-auto w-72 block">
    </div>
    <div class="md:col-span-4 lg:col-span-2 xl:col-span-4 self-center">
        <h3
            class="text-slate-800 dark:text-slate-200 text-center text-2xl md:text-2xl lg:text-lg xl:text-2xl font-bold leading-8 py-2 md:py-2 lg:py-1 xl:py-2">
            <span class="inline-block xl:block">Khalid El Bekay</span>
        </h3>
        <div class="text-center text-slate-400 text-base md:text-base lg:text-sm xl:text-base font-medium py-3">
            Currículum Vitae — Versión en Español
        </div>
        <div class="text-center py-3 md:mb-3 lg:mb-0 xl:mb-3">
            <button
                class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">Descargar</button>
        </div>
    </div>
</div>

<div class="col-span-12 md:col-span-12 lg:col-span-4 mt-4 ">
    <div class="card">
        <div class="card-body border-b rounded border-dashed dark:border-gray-700">
            <h6 class="font-semibold text-sm uppercase text-slate-400">Sobre mí</h6>
        </div>
        <div class="card-body mx-2">
            <p class="text-slate-500 text-[15px] mb-4">
                <strong>Khalid El Bekay</strong> es un reconocido artista contemporáneo marroquí-español, conocido por
                su
                fusión única de influencias culturales orientales y occidentales en su obra.<br><br>

                <strong>Biografía:</strong><br>
                <strong>Nacimiento:</strong> 1966 en Casablanca, Marruecos.<br>
                <strong>Educación:</strong> Graduado del Instituto Superior de Bellas Artes de Tetuán, Marruecos (1990).
                Estudió grabado en la Facultad de Bellas Artes de Barcelona.<br>
                <strong>Residencia:</strong> Divide su tiempo entre Barcelona y Casablanca, con estudios en ambas
                ciudades.<br><br>

                <strong>Estilo y técnicas artísticas:</strong><br>
                - Collage y técnica mixta: Superpone papel gris o blanco sobre madera sin herramientas cortantes.<br>
                - Fusión cultural: Une influencias marroquíes y mediterráneas con colores vibrantes.<br>
                - Evolución: De lo figurativo a lo abstracto, incorporando más tarde caligrafía china.<br><br>

                <strong>Temas clave:</strong><br>
                - Doble identidad: Une la herencia marroquí con la vida catalana.<br>
                - Naturaleza y tierra: Describe su obra como un "diálogo con la tierra".<br><br>

                <strong>Exposiciones y reconocimientos:</strong><br>
                - Exposiciones internacionales (MIART, Feria de Arte de Bolonia, Venecia, exposiciones individuales en
                Rabat, Ginebra, Madrid).<br>
                - Finalista en la 30ª Bienal de Pintura de Tarragona (1997).<br>
                - Obras en el Palacio Real de Marruecos, el World Trade Center de Barcelona y el Museo de la Acuarela de
                Girona.<br><br>

                <strong>Citas:</strong><br>
                "Mi obra es una mezcla de culturas occidentales y orientales... mis pinturas materializan mi diálogo con
                la tierra."<br>
                "Emigrar es dar y recibir. Somos embajadores de nuestra cultura."
            </p>
            <ul class="list-none">
                <li class="mb-2"><i class="fa-solid fa-cake-candles text-slate-400 mr-2"></i>
                    <span class="text-slate-500 text-sm">06 de junio de 1989</span>
                </li>
                <li class="mb-2"><i class="fa-solid fa-language text-slate-400 mr-2"></i>
                    <span class="text-slate-500 text-sm">Inglés, francés, alemán</span>
                </li>
                <li class="mb-2"><i class="far fa-flag text-slate-400 mr-2"></i>
                    <span class="text-slate-500 text-sm">EE. UU.</span>
                </li>
                <li class="mb-2"><i class="fa-solid fa-shield-halved text-slate-400 mr-2"></i>
                    <span class="text-slate-500 text-sm">Lectura, viajar</span>
                </li>
            </ul>
        </div>
        <div class="card-body border-b rounded border-dashed dark:border-gray-700">
            <h6 class="font-semibold text-sm uppercase text-slate-400">Contacto</h6>
        </div>
        <div class="card-body">
            <ul class="list-none mb-3">
                <li class="mb-2"><i class="fa-solid fa-phone text-slate-400 mr-2"></i>
                    <span class="text-slate-500 text-sm">+1 234 567 890</span>
                </li>
                <li class="mb-2"><i class="fa-regular fa-envelope text-slate-400 mr-2"></i>
                    <span class="text-slate-500 text-sm">example@example.com</span>
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