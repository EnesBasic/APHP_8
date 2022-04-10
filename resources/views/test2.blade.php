@php
    $name = "taraalala"
@endphp

<x-main>
    <x-slot:title>Test_2<x-slot>
    
    <x-slot:footer>
    <h2>Hello from footer</h2>

    <h1>Hello from test 2</h1>
    <p>HAhaha Ipsum </p>
    <p>{{ $name }}</p>

</x-main>