<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>HZ HBO-ICT</title>
    <link rel="stylesheet" href="{{ asset('build/assets/css/style.css') }}">
    <script src="{{ asset('build/assets/js/style.js') }}" defer></script>
</head>
<body>
{{-- Navigation bar --}}
<x-ui.navbar>
    <x-slot name="brand">
        <x-ui.navbar-item route="home">Home<i class="fa fa-home" aria-hidden="true"></i></x-ui.navbar-item>
        <x-ui.navbar-item route="profile">Profile<i class="fa fa-user" aria-hidden="true"></i></x-ui.navbar-item>
        <x-ui.navbar-item route="dashboard">Dashboard<i class="fa fa-bullseye" aria-hidden="true"></i></x-ui.navbar-item>
        <x-ui.navbar-item route="faqs.index">FAQ<i class="fa fa-comments" aria-hidden="true"></i></x-ui.navbar-item>
        <x-ui.navbar-item route="posts.index">Blog<i class="fa fa-comments" aria-hidden="true"></i></x-ui.navbar-item>
    </x-slot>
</x-ui.navbar>

{{-- Content --}}
{{ $slot }}

{{-- Footer --}}
<div class="home">
    <div>
        <a href="/" class="link">Home</a>
    </div>
</div>

<div id="foto" style="text-align: center">
    <img src="{{ asset('build/assets/images/HZ-logo-EN.jpg') }}" alt="foto">
</div>

<footer>
    <p>&copy; 2024 - Renzo Debeer</p>
</footer>
</body>
</html>
