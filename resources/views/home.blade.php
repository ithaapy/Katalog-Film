<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

        {{-- HERO --}}
    <section class="flex flex-col items-center gap-8 py-4 sm:py-6 lg:flex-row lg:gap-16 lg:py-10">

        <div class="aspect-2/3 w-52 shrink-0 overflow-hidden rounded-2xl shadow-xl ring-1 ring-black/5 sm:w-60 lg:w-72">
            <img alt="Laut Bercerita" src="{{ asset('img/laut-bercerita.jpg') }}"
                 class="h-full w-full object-cover transition duration-500 hover:scale-[1.03]" />
        </div>

        <div class="text-center lg:text-left">
            <p class="text-xs font-semibold uppercase tracking-[0.25em] text-accent">Katalog Film Indonesia</p>

            <h1 class="mt-3 text-4xl font-extrabold leading-[1.05] tracking-tight sm:text-5xl lg:text-6xl">
                Temukan Cerita<br class="hidden sm:block"> di Balik Layar.
            </h1>

            <p class="mx-auto mt-5 max-w-md text-base leading-relaxed text-base-content/70 lg:mx-0">
                Jelajahi film Indonesia pilihan dengan genre, tanggal rilis, dan sinopsis.
            </p>

            <a href="{{ route('katalog') }}"
               class="btn btn-primary mt-8 w-full px-8 transition duration-200 hover:-translate-y-0.5 hover:shadow-md sm:w-auto">Lihat Katalog</a>
        </div>
    </section>
   

    {{-- FILM PILIHAN --}}
    <h2 class="text-2xl font-bold mt-8 mb-4">Film Pilihan</h2>

    <div class="grid gap-4">
        @foreach ($film_pilihan as $film)
            <div class="card card-side bg-base-100 shadow-sm">
                <figure class="w-32 sm:w-44 shrink-0">
                    <img src="{{ asset('img/' . $film['poster']) }}" alt="{{ $film['judul'] }}" class="h-full w-full object-cover" />
                </figure>
                <div class="card-body">
                    <h3 class="card-title">{{ $film['judul'] }}</h3>
                    <div class="flex flex-wrap items-center gap-2">
                        <span class="badge badge-primary">{{ $film['genre'] }}</span>
                        <span class="badge badge-outline">⭐ {{ $film['rating'] }}</span>
                    </div>
                    <!-- <span class="text-sm">{{ $film['tahun'] }}</span> -->
                    <p class="text-sm opacity-70">📅 Rilis: {{ $film->tanggal_rilis->locale('id')->translatedFormat('d F Y') }}</p> 
                    <p>{{ Str::limit($film['sinopsis'], 250) }}</p>
                    <div class="card-actions justify-end">
                        <a href="{{ route('detail', $film['id']) }}" class="btn btn-primary btn-sm">Lihat Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>

