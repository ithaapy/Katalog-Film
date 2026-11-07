<x-layout>
    <!-- User memilih film → Controller menerima ID film → Model mencari film → Controller mengirim film ke View. -->
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="card lg:card-side bg-base-100 shadow-sm">
           {{-- Menampilkan poster film --}}
        <figure class="lg:w-80 shrink-0">
            <img src="{{ asset('img/' . $film['poster']) }}" alt="{{ $film['judul'] }}"
                 class="h-full w-full object-cover" />
        </figure>

        <div class="card-body">
             {{-- Menampilkan judul film --}}
            <h2 class="card-title text-3xl">{{ $film['judul'] }}</h2>

              {{-- Menampilkan genre dan rating film --}}
            <div class="flex flex-wrap items-center gap-2">
                <span class="badge badge-primary">{{ $film['genre'] }}</span>
                <span class="badge badge-outline">⭐ {{ $film['rating'] }}</span>
            </div>

            <div class="text-sm opacity-70">
                <p>Tahun: {{ $film['tahun'] }}</p>
                <p>Tanggal rilis: {{ $film->tanggal_rilis->locale('id')->translatedFormat('d F Y') }}</p>
                <p>Sutradara: {{ $film['sutradara'] }}</p>
                <p>Produser: {{ $film['produser'] }}</p>
                <p>Pemeran Utama: {{ $film['pemeran_utama'] }}</p>
            </div>

            <h3 class="font-bold mt-2">Sinopsis</h3>
            <p>{{ $film['sinopsis'] }}</p>

            <div class="card-actions justify-end mt-4">
                <a href="{{ route('katalog') }}" class="btn btn-primary">&laquo; Kembali ke Katalog</a>
            </div>
        </div>
    </div>
</x-layout>