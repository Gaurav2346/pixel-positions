@props(['employer','width' =>100])

<img src="{{ asset('storage/'.$employer->logo) }}" width="{{ $width }}">


{{--<img src="{{ $employer->logo ?? asset('images/default-logo.jpg') }}"--}}
{{--     alt="{{ $employer->name ?? 'Employer Logo' }}"--}}
{{--     class="rounded-xl"--}}
{{--     width="{{ $width }}">--}}



{{--@props(['employer', 'width' => 100])--}}

{{--@if ($employer && $employer->logo)--}}
{{--    <img src="{{ $employer->logo }}"--}}
{{--         alt="{{ $employer->name ?? 'Employer Logo' }}"--}}
{{--         class="rounded-xl"--}}
{{--         width="{{ $width }}">--}}
{{--@else--}}
{{--    <img src="{{ asset('images/default-logo.png') }}"--}}
{{--         alt="Default logo"--}}
{{--         class="rounded-xl"--}}
{{--         width="{{ $width }}">--}}
{{--@endif--}}

