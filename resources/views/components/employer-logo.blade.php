@props(['employer', 'width' => 100])

@php
    $logo = $employer->logo;

    // Detect if it's not a full URL (i.e. a stored file name)
    if (! filter_var($logo, FILTER_VALIDATE_URL)) {
        $logo = asset('storage/' . ltrim($logo, '/'));
    }
//    // Optional fallback image if null
//    if (empty($logo)) {
//        $logo = 'https://via.placeholder.com/150?text=No+Logo';
//    }
@endphp

<img
    src="{{ $logo }}"
    width="{{ $width }}"
    alt="{{ $employer->name ?? 'Employer Logo' }}"
    class="rounded-xl object-cover"
/>
