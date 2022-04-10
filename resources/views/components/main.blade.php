<!DOCTYPE html>
<html lang="en">
    <x-head>
        {{ $title }}
    </x-head>
    <x-body>
        <x-slot:footer>{{$footer}}</x-slot>
        {{ $slot }}
    </x-body>
</html>