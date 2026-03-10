@props(['active' => false])
<svg {{ $attributes }} style="{{ $active ? 'fill:#ef4444' : 'fill:'}} ">{{ $slot }}</svg>