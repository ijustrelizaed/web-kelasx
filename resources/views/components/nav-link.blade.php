@props(['active' => false])
<a {{ $attributes }} style="{{ $active ? 'color:#ef4444' : 'color:'}} ">{{ $slot }}</a>