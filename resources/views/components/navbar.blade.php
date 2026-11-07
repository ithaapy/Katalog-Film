<header class="sticky top-0 z-50 border-b border-base-300 bg-base-100/90 shadow-sm backdrop-blur">
    <div class="navbar mx-auto min-h-14 max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="navbar-start w-auto lg:w-1/2">
            {{-- Menu dropdown: hanya di layar kecil --}}
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost btn-square -ml-2 lg:hidden" aria-label="Buka menu">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="-1" class="menu menu-sm dropdown-content z-50 mt-3 w-52 rounded-box border border-base-300 bg-base-100 p-2 shadow-lg">
                    <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'font-semibold text-accent' : '' }}">Home</a></li>
                    <li><a href="{{ route('katalog') }}" class="{{ request()->routeIs('katalog', 'detail') ? 'font-semibold text-accent' : '' }}">Katalog</a></li>
                    <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'font-semibold text-accent' : '' }}">About</a></li>
                </ul>
            </div>

            <a href="{{ route('home') }}" class="flex items-center gap-2 text-lg font-extrabold tracking-tight sm:text-xl">
        
                <span>Katalog<span class="text-accent">Film</span></span>
            </a>
        </div>

        {{-- Menu tengah: hanya di layar besar --}}
        <nav class="navbar-center hidden gap-10 lg:flex" aria-label="Menu utama">
            <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">Home</x-nav-link>
            <x-nav-link href="{{ route('katalog') }}" :active="request()->routeIs('katalog', 'detail')">Katalog</x-nav-link>
            <x-nav-link href="{{ route('about') }}" :active="request()->routeIs('about')">About</x-nav-link>
        </nav>

        {{-- Search --}}
        <div class="navbar-end flex-1 lg:flex-initial">
            <form action="{{ route('katalog') }}" method="GET" role="search">
                <label class="input input-sm flex w-28 items-center gap-2 rounded-full border-base-300 bg-base-200 sm:w-48 lg:w-64">
                    <button type="submit" aria-label="Cari" class="text-base-content/50 transition-colors duration-200 hover:text-accent">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M17 10.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" />
                        </svg>
                    </button>
                    <input type="search" name="q" value="{{ request('q') }}" placeholder="Cari film..." class="grow" />
                </label>
            </form>
        </div>
    </div>
</header>