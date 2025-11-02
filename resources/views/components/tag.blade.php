@props(['tag', 'size' => 'base'])

@php
    $classes = 'bg-white/10 hover:bg-white/50 rounded-xl transition-colors duration-300';

    if ($size == 'base') {
        $classes .= ' px-5 py-2 text-sm';
    } elseif ($size == 'small') {
        $classes .= ' px-2 py-1 text-xs';
    }
@endphp

<a href="/tags/{{$tag->name}}{{ strtolower($tag->name) }}" class="{{ $classes }}">
    {{ optional($tag)->name }}
</a>


