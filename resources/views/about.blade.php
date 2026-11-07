<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- 1. HERO ABOUT --}}
    <section class="py-6 text-center sm:py-10">
        <span class="mx-auto mb-5 block h-0.5 w-12 bg-accent"></span>
        <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl">Tentang Katalog<span class="text-accent">Film</span></h1>
        <p class="mx-auto mt-4 max-w-xl text-base leading-relaxed text-base-content/70 sm:text-lg">
            Menjelajahi cerita Indonesia, satu film dalam satu waktu.
        </p>
    </section>

    {{-- 2. APA ITU KATALOGFILM? --}}
    <section class="mt-8 grid items-center gap-6 rounded-2xl border border-base-300 bg-base-100 p-6 sm:p-10 md:grid-cols-5 md:gap-10">
        <div class="md:col-span-2">
            <p class="text-xs font-semibold uppercase tracking-[0.25em] text-accent">Tentang Website</p>
            <h2 class="mt-2 text-3xl font-extrabold leading-tight tracking-tight">Apa itu KatalogFilm?</h2>
        </div>
        <p class="text-base leading-relaxed text-base-content/80 sm:text-lg md:col-span-3">
            KatalogFilm adalah website katalog yang dibuat untuk membantu pengguna menjelajahi
            berbagai film Indonesia dalam satu tempat. Pengguna dapat melihat informasi film seperti
            poster, genre, tanggal rilis, rating, dan sinopsis singkat.
        </p>
    </section>

    {{-- 3. YANG BISA KAMU TEMUKAN --}}
    <section class="mt-14 sm:mt-20">
        <div class="mb-8 text-center">
            <p class="text-xs font-semibold uppercase tracking-[0.25em] text-accent">Fitur</p>
            <h2 class="mt-2 text-3xl font-extrabold tracking-tight">Yang Bisa Kamu Temukan</h2>
        </div>

        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4 lg:gap-6">
            <div class="rounded-xl border border-base-300 bg-base-100 p-6 transition duration-300 hover:-translate-y-1 hover:shadow-md">
                <div class="flex h-11 w-11 items-center justify-center rounded-full bg-base-200 text-xl">🎬</div>
                <h3 class="mt-4 font-bold">Jelajahi Film</h3>
                <p class="mt-2 text-sm leading-relaxed text-base-content/70">Temukan berbagai film Indonesia yang tersedia dalam katalog.</p>
            </div>

            <div class="rounded-xl border border-base-300 bg-base-100 p-6 transition duration-300 hover:-translate-y-1 hover:shadow-md">
                <div class="flex h-11 w-11 items-center justify-center rounded-full bg-base-200 text-xl">🏷️</div>
                <h3 class="mt-4 font-bold">Filter Genre</h3>
                <p class="mt-2 text-sm leading-relaxed text-base-content/70">Cari film berdasarkan genre seperti Drama, Horor, Aksi, Romantis, dan Komedi.</p>
            </div>

            <div class="rounded-xl border border-base-300 bg-base-100 p-6 transition duration-300 hover:-translate-y-1 hover:shadow-md">
                <div class="flex h-11 w-11 items-center justify-center rounded-full bg-base-200 text-xl">⭐</div>
                <h3 class="mt-4 font-bold">Informasi Film</h3>
                <p class="mt-2 text-sm leading-relaxed text-base-content/70">Lihat informasi seperti rating, tanggal rilis, poster, dan sinopsis.</p>
            </div>

            <div class="rounded-xl border border-base-300 bg-base-100 p-6 transition duration-300 hover:-translate-y-1 hover:shadow-md">
                <div class="flex h-11 w-11 items-center justify-center rounded-full bg-base-200 text-xl">🔎</div>
                <h3 class="mt-4 font-bold">Temukan Favoritmu</h3>
                <p class="mt-2 text-sm leading-relaxed text-base-content/70">Jelajahi katalog untuk menemukan film yang sesuai dengan minatmu.</p>
            </div>
        </div>
    </section>

    {{-- 4. DIBANGUN DENGAN LARAVEL --}}
    <section class="mt-14 rounded-2xl bg-neutral p-6 text-neutral-content sm:mt-20 sm:p-10">
        <div class="mx-auto max-w-2xl text-center">
            <p class="text-xs font-semibold uppercase tracking-[0.25em] text-amber-400">Teknologi</p>
            <h2 class="mt-2 text-3xl font-extrabold tracking-tight">Dibangun dengan Laravel</h2>
            <p class="mt-4 leading-relaxed text-neutral-content/70">
                Website ini dikembangkan menggunakan Laravel dengan menerapkan konsep MVC
                (Model, View, Controller) untuk mengatur data, tampilan, dan alur aplikasi.
            </p>
        </div>

        <div class="mt-8 grid gap-4 md:grid-cols-3 md:gap-6">
            <div class="rounded-xl border border-white/10 bg-white/5 p-6">
                <span class="text-4xl font-extrabold text-amber-400">M</span>
                <h3 class="mt-3 text-sm font-bold uppercase tracking-widest">Model</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-content/70">Mengelola dan menyediakan data film dari database.</p>
            </div>

            <div class="rounded-xl border border-white/10 bg-white/5 p-6">
                <span class="text-4xl font-extrabold text-amber-400">V</span>
                <h3 class="mt-3 text-sm font-bold uppercase tracking-widest">View</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-content/70">Menampilkan informasi film kepada pengguna melalui Blade.</p>
            </div>

            <div class="rounded-xl border border-white/10 bg-white/5 p-6">
                <span class="text-4xl font-extrabold text-amber-400">C</span>
                <h3 class="mt-3 text-sm font-bold uppercase tracking-widest">Controller</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-content/70">Mengatur alur data antara Model dan View.</p>
            </div>
        </div>
    </section>

    {{-- 5. CTA --}}
    <section class="py-14 text-center sm:py-20">
        <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">Temukan film berikutnya.</h2>
        <p class="mx-auto mt-4 max-w-md leading-relaxed text-base-content/70">
            Jelajahi katalog dan temukan cerita Indonesia yang menarik untuk kamu tonton.
        </p>
        <a href="{{ route('katalog') }}"
           class="btn btn-primary mt-8 px-8 transition duration-200 hover:-translate-y-0.5 hover:shadow-md">Lihat Katalog</a>
    </section>
</x-layout>