<x-layout>

    {{-- 
        VIEW:
        Menampilkan halaman katalog film kepada user.
        Data film dan data filter dikirim oleh Controller.
    --}}

    <x-slot:title>{{ $title }}</x-slot:title>

        @if ($q)
        <p class="mb-6 text-sm text-base-content/70">
            Hasil pencarian untuk <strong class="text-base-content">“{{ $q }}”</strong>:
            {{ $films->count() }} film ditemukan.
            <a href="{{ route('katalog') }}" class="ml-2 font-medium text-accent hover:underline">Hapus pencarian</a>
        </p>
        @endif
    {{-- 
        FILTER GENRE:
        Menampilkan pilihan kategori/genre yang bisa dipilih oleh user.
    --}}
    <div role="tablist" class="tabs tabs-box mb-6">

        {{-- 
            Tombol "Semua":
            Jika tidak ada genre yang dipilih, tombol ini menjadi aktif.
        --}}
        <a href="{{ route('katalog') }}"
           role="tab"
           class="tab {{ !$genre_dipilih ? 'tab-active' : '' }}">
            Semua
        </a>

        {{-- 
            Menampilkan setiap genre yang dikirim oleh Controller.
            Setiap genre dibuat menjadi satu tombol filter.
        --}}
        
        @foreach ($daftar_genre as $genre)

            {{-- 
                Saat user memilih genre, genre tersebut dikirim
                melalui URL ke Controller untuk diproses.
            --}}
            <a href="{{ route('katalog', ['genre' => $genre]) }}"
               role="tab"
               class="tab {{ $genre_dipilih == $genre ? 'tab-active' : '' }}">

                {{-- Menampilkan nama genre sebagai pilihan filter --}}
                {{ $genre }}

            </a>
        @endforeach
    </div>


    {{-- 
        DAFTAR FILM:
        Menampilkan film yang sudah dikirim oleh Controller.
        Jika filter digunakan, $films berisi hasil film yang sudah difilter.
    --}}
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">

        {{-- 
            Menampilkan setiap film satu per satu.
            $films berasal dari Controller.
        --}}
        @forelse ($films as $film)

            <div class="card bg-base-100 shadow-sm">

                {{-- Menampilkan poster film --}}
                <figure>
                    <img src="{{ asset('img/' . $film['poster']) }}"
                         alt="{{ $film['judul'] }}"
                         class="h-80 w-full object-cover">
                </figure>

                <div class="card-body">

                    {{-- Menampilkan judul film --}}
                    <h2 class="card-title">
                        {{ $film['judul'] }}
                    </h2>

                    {{-- Menampilkan genre film --}}
                    <div class="flex flex-wrap items-center gap-2">
                        <span class="badge badge-primary">
                            {{ $film['genre'] }}
                        </span>
                    </div>

                    {{-- Menampilkan tanggal rilis --}}
                    <p class="text-sm opacity-70">
                        Rilis:
                        {{ $film->tanggal_rilis->locale('id')->translatedFormat('d F Y') }}
                    </p>

                    {{-- Menampilkan sebagian sinopsis --}}
                    <p class="text-sm">
                        {{ Str::limit($film['sinopsis'], 80) }}
                    </p>

                    {{-- 
                        Tombol untuk membuka halaman detail film.
                        ID film dikirim ke Route.
                    --}}
                    <div class="card-actions justify-end">
                        <a href="{{ route('detail', $film['id']) }}"
                           class="btn btn-primary btn-sm">
                            Lihat Detail
                        </a>
                    </div>

                </div>
            </div>

        @empty

            {{-- 
                Jika tidak ada film yang sesuai dengan filter,
                pesan ini akan ditampilkan.
            --}}
            <p class="col-span-full text-center">
                Tidak ada film yang ditemukan.
            </p>

        @endforelse
    </div>

</x-layout>