@props(['active' => false])

<a {{ $attributes }} aria-current="{{ $active ? 'page' : 'false' }}"
   class="relative py-1 text-sm font-medium tracking-wide transition-colors duration-200
          after:absolute after:-bottom-1 after:left-0 after:h-0.5 after:w-full after:origin-left after:bg-accent after:transition-transform after:duration-300 after:content-['']
          {{ $active ? 'text-base-content after:scale-x-100' : 'text-base-content/60 hover:text-base-content after:scale-x-0 hover:after:scale-x-100' }}">
    {{ $slot }}
</a>

<!-- @props(['active' => false])

<a {{ $attributes }} class="{{ $active ? 'menu-active' : '' }}">{{ $slot }}</a>


 -->
