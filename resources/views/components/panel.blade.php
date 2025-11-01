@php
    $classes = 'p-4 bg-white/10 hover:bg-white/15 rounded-xl  transition-colors duration-300 border border-transparent hover:border-blue-800 group'
@endphp

<div {{$attributes(['class'=>$classes])}}>

    {{$slot}}

</div>
