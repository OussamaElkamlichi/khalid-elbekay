@extends('layout.app')
@section('title', 'Currículum de Khalid El Bekay')
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
                <div class="text-slate-500 text-[15px] mb-4  leading-relaxed">
                    <h6 class="font-bold text-lg mb-2">FORMATION / BIOGRAPHIE</h6>
                    <ul class="list-disc pr-5 mb-4">
                        <li><strong>1990:</strong> Diploma en Bellas Artes, Instituto Superior de Bellas Artes de Tetuán,
                            Marruecos.</li>
                        <li>Prácticas de Grabado, Centro Cultural Francés, Tetuán, Marruecos.</li>
                        <li><strong>1991:</strong> Se traslada a Barcelona.</li>
                        <li><strong>1995:</strong> Licenciado en Bellas Artes, especialidad Grabado, Universidad de
                            Barcelona.</li>
                        <li><strong>1997:</strong> Incorporación a Centre d’Art Contemporani Piramidón, Barcelona.</li>
                        <li><strong>2001:</strong> Fundador de ASSO. Artistas Contemporáneos de Cataluña.</li>
                        <li><strong>2007:</strong> Abre segundo estudio en Casablanca.</li>
                        <li><strong>2024:</strong> Comisario, Pabellón Marroquí, FIG BILBAO.</li>
                    </ul>

                    <h6 class="font-bold text-lg mb-2">EXPOSICIONES INDIVIDUALES</h6>
                    <ul class="list-disc pr-5 mb-4">
                        <li><strong>2025:</strong> Transparency, Markhiya Art Gallery, Doha, Qatar.</li>
                        <li><strong>2023:</strong> Africa, Espiral Art Gallery, Noja, Santander.</li>
                        <li><strong>2022:</strong> Africa, Piramidón Art Gallery, Barcelona.</li>
                    </ul>

                    <h6 class="font-bold text-lg mb-2">EXPOSICIONES COLECTIVAS</h6>
                    <ul class="list-disc pr-5 mb-4">
                        <li><strong>2024:</strong> Orient Art Gallery, Amman, Jordania.</li>
                        <li><strong>2023:</strong> Guanlan Printmaking Art Museum, Shenzhen.</li>
                    </ul>

                    <h6 class="font-bold text-lg mb-2">FERIAS INTERNACIONALES</h6>
                    <ul class="list-disc pr-5 mb-4">
                        <li><strong>2024:</strong> Art Madrid, Galería Espiral | Fig Bilbao, Manera Negra.</li>
                        <li><strong>2022:</strong> Fig Bilbao, Manera Negra.</li>
                    </ul>

                    <h6 class="font-bold text-lg mb-2">COLECCIONES PÚBLICAS Y PRIVADAS</h6>
                    <p class="pr-5">
                        Palais Royal, Maroc | World Trade Center, Barcelona | Musée de l’Aquarelle, Llançà | Banque BMC,
                        Maroc |
                        Hotel Nafis, Marrakech | Musée Etnologique, Arbucies | Mairie de Salou | Institut Supérieur des
                        Beaux-Arts, Tetuán |
                        Centre d’Art Piramidón, Barcelona | Hotel Saadi Palace, Marrakech | Banque SG, Casablanca | CNIA,
                        Casablanca |
                        Ministerio del Interior, Rabat | Ministerio de Finanzas, Rabat | Parlamento, Rabat | Hotel NH
                        (Barcelona, Milano, Lisboa, Nice, Madrid) |
                        ONCF Gare, Rabat-Ville | CDG, Rabat | Ministerio de Educación, Rabat | Musée MV, Rabat y Marrakech |
                        Palais Mamounia, Marrakech.
                    </p>
                </div>
            </div>


            <div class="card-body border-b rounded border-dashed dark:border-gray-700">
                <h6 class="font-semibold text-sm uppercase text-slate-400">Contacto</h6>
            </div>
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
            </div>
        </div>
    </div>
@endSection
