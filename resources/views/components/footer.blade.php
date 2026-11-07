<footer class="mt-8 bg-neutral text-neutral-content">
    <div class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">

        <div class="grid gap-8 md:grid-cols-3 md:gap-12">
            {{-- Brand --}}
            <div>
                <a href="{{ route('home') }}" class="text-xl font-extrabold tracking-tight text-white">
                    Katalog<span class="text-amber-400">Film</span>
                </a>
                <p class="mt-3 max-w-xs text-sm leading-relaxed text-neutral-content/70">
                    Katalog film Indonesia untuk menjelajahi poster, genre, tanggal rilis, rating, dan sinopsis.
                </p>
            </div>

            {{-- Menu --}}
            <div>
                <h3 class="text-sm font-semibold uppercase tracking-widest text-white">Menu</h3>
                <ul class="mt-4 space-y-2 text-sm">
                    <li><a href="{{ route('home') }}" class="text-neutral-content/70 transition-colors duration-200 hover:text-white">Home</a></li>
                    <li><a href="{{ route('katalog') }}" class="text-neutral-content/70 transition-colors duration-200 hover:text-white">Katalog</a></li>
                    <li><a href="{{ route('about') }}" class="text-neutral-content/70 transition-colors duration-200 hover:text-white">About</a></li>
                </ul>
            </div>

            {{-- Tentang proyek --}}
            <div>
                <h3 class="text-sm font-semibold uppercase tracking-widest text-white">Tentang Proyek</h3>
                <ul class="mt-4 space-y-2 text-sm text-neutral-content/70">
                    <li>Tugas Pemrograman Web Berbasis Framework</li>
                    <li>Dibangun dengan Laravel</li>
                    <li>Nitha Yuktiana &middot; 029</li>
                </ul>
            </div>
        </div>

        {{-- Baris bawah --}}
        <div class="mt-10 flex flex-col gap-2 border-t border-white/10 pt-6 text-xs text-neutral-content/50 sm:flex-row sm:items-center sm:justify-between">
            <p>&copy; {{ date('Y') }} KatalogFilm. Dibuat untuk keperluan pembelajaran.</p>
            <p>Poster dan sinopsis film adalah milik masing-masing pemegang hak cipta.</p>
        </div>
    </div>
</footer>