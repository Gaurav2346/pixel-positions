@props(['employer', 'width' => 100])

@php
    $logo = filter_var($employer->logo, FILTER_VALIDATE_URL)
        ? $employer->logo
        : asset('storage/' . $employer->logo);
@endphp

<img
    src="{{ $logo }}"
    width="{{ $width }}"
    alt="{{ $employer->name }}"
    class="rounded-xl object-cover"
/>
