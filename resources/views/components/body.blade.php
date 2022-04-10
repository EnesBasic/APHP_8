<body>
@php
    $nav = mt_rand(0,1);
@endphp
     
@if($nav)
    <x-nav/>
@endif

   {{--<x-nav/>--}}

    <main>
        {{ $slot }}
    </main>
    <footer>
    {{ $slot }}
    </footer>

</body>