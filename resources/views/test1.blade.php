@php
    $name = "emkir"
@endphp

<x-main>
    <x-slot:title>Test_1<x-slot>
    
    <x-slot:footer>
    <h2>Hello from footer</h2>

    <h1>Hello from test 1</h1>
    <p>Lorem Ipsum </p>
    <p>{{ $name }}</p>

</x-main>