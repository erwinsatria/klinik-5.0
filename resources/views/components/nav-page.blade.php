@props(['active'])

@php
    $classes = ($active ?? true)
                ? 'text-emerald-600 border-b-2 border-emerald-600 p-5'
                : 'hover:text-emerald-600 p-5 hover:border-b-2 border-emerald-600 transition duration-300 ease-in-out';
@endphp


<a {{ $attributes->merge(['class' => $classes]) }}>
     {{ $slot }}
</a>