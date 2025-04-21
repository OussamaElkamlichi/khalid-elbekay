@extends('layout.app')
@section('title', 'Available Art - Khalid El Bekay')
@section('content')
    <div class="" id="Auctions" role="tabpanel" aria-labelledby="Auctions-tab">
        <div class="grid md:grid-cols-9 lg:grid-cols-9 xl:grid-cols-10 gap-4 m-9">
            @php
                $artworks = [
                    [
                        'title' => 'Auberg In VI',
                        'artist' => 'Khalid El Bekay',
                        'price' => '7.2 SOL',
                        'image' => 'auberg-in-vi-50.x-65-cm-mixte-sur-papier-2012-.webp'
                    ],
                    [
                        'title' => 'T. De Tasse I',
                        'artist' => 'Khalid El Bekay',
                        'price' => '6.5 SOL',
                        'image' => 't.de-tasse-i-100-x100-cm-mixte-sur-bois-2007.webp'
                    ],
                    [
                        'title' => 'Auberg In XIII',
                        'artist' => 'Khalid El Bekay',
                        'price' => '8.1 SOL',
                        'image' => 'auberg-in-xiii-2016-technique-mixte-sur-toile-150-x-150-cm.webp'
                    ],
                    [
                        'title' => 'Bambou III',
                        'artist' => 'Khalid El Bekay',
                        'price' => '5.3 SOL',
                        'image' => 'bambou-iii-mixte-sur-toile-100-x100cm-2016.jpg'
                    ],
                    [
                        'title' => 'Bambu III',
                        'artist' => 'Khalid El Bekay',
                        'price' => '6.9 SOL',
                        'image' => 'bambu-iii-150-x-150-cm-mixte-sur-bois-2017.jpg'
                    ],
                    [
                        'title' => 'Bambu X',
                        'artist' => 'Khalid El Bekay',
                        'price' => '7.8 SOL',
                        'image' => 'bambu-x-200-x-160-cm-mixte-sur-papier-2017.jpg'
                    ],
                    [
                        'title' => 'Beijing I',
                        'artist' => 'Khalid El Bekay',
                        'price' => '9.0 SOL',
                        'image' => 'beijing-i-150-x150-cm-mixtesur-toile-2016..webp'
                    ],
                    [
                        'title' => 'Fossil II',
                        'artist' => 'Khalid El Bekay',
                        'price' => '4.7 SOL',
                        'image' => 'fossil-ii-120x120-cm-mixte-sur-bois-2011.jpg'
                    ],
                    [
                        'title' => 'Composition 4214',
                        'artist' => 'Khalid El Bekay',
                        'price' => '5.9 SOL',
                        'image' => 'img_4214.jpg'
                    ]
                ];
            @endphp

            @foreach($artworks as $art)
                <div class="col-span-10 md:col-span-3 lg:col-span-3 xl:col-span-2">
                    <div class="card">
                        <div class="card-body relative">
                            <a href="#" class="block">
                                <div class="absolute border-2 border-slate-200 bg-slate-300 bg-opacity-60 rounded px-3 left-0">
                                    {{-- <div class="clockbox" data-date="December 22, 2025 21:14:01">
                                        <div>
                                            <span class="days text-sm font-medium mr-1">2</span>
                                            <span class="hours text-sm font-medium mr-1">0</span>
                                            <span class="minutes text-sm font-medium mr-1">1</span>
                                            <span class="seconds text-sm font-medium">7</span>
                                        </div>
                                    </div> --}}
                                </div>
                                <img src="{{ asset('ui-kit/dist/assets/images/available/' . $art['image']) }}" alt="" class="rounded-md w-full h-300 object-cover">
                            </a>
                        </div><!--end card-body-->
                        <div class="card-body pt-0">
                            <div class="flex justify-between">
                                <div class="self-center">
                                    <h6 class="font-medium text-[15px] text-slate-700 block dark:text-slate-300">{{ $art['title'] }}</h6>
                                    <span class="text-xs text-slate-400 font-medium block">{{ '@' . Str::slug($art['artist'], '') }}</span>
                                </div>
                                <div class="self-center">
                                    <span class="text-xs text-slate-400 font-medium">Current Price</span>
                                    <h6 class="font-medium text-sm text-slate-700 block dark:text-slate-400">{{ $art['price'] }}</h6>
                                </div>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            @endforeach
        </div>
    </div>
@endsection
