@props(['employer','width' =>100])

<img src="{{ asset('storage/'.$employer->logo) }}" width="{{ $width }}">

