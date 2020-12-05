<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('metatitle')</title>
    <meta name="author" content="@yield('metaauthor')">
    <meta name="description" content="@yield('metadescription')">

    <!-- Tailwind -->
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla {
            font-family: karla;
        }
    </style>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</head>
<body class="bg-white font-family-karla">

<!-- Top Bar Nav -->
<nav class="w-full py-4 bg-blue-800 shadow">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between">

        <nav>
            <ul class="flex items-center justify-between font-bold text-sm text-white uppercase no-underline">
                <li><a class="hover:text-gray-200 hover:underline px-4" href="/dashboard">Dashboard</a></li>
                <li><a class="hover:text-gray-200 hover:underline px-4" href="/login">Login</a></li>
                <li><a class="hover:text-gray-200 hover:underline px-4" href="/register">Register</a></li>
            </ul>
        </nav>

        <div class="flex items-center text-lg no-underline text-white pr-6">
            <a class="" href="#">
                <i class="fab fa-facebook"></i>
            </a>
            <a class="pl-6" href="#">
                <i class="fab fa-youtube"></i>
            </a>
            <a class="pl-6" href="#">
                <i class="fab fa-twitter"></i>
            </a>
        </div>
    </div>
</nav>

<!-- Text Header -->
<header class="w-full container mx-auto">
    <div class="flex flex-col items-center py-12">
        <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="/">
            {{env('APP_NAME')}}
        </a>
        <p class="text-lg text-gray-600">
            {{env('CONTENTS_SUBHEADER')}}
        </p>
    </div>
</header>

<!-- Topic Nav -->
<nav class="w-full py-4 border-t border-b bg-gray-100" x-data="{ open: false }">
    <div class="block sm:hidden">
        <a
            href="#"
            class="block md:hidden text-base font-bold uppercase text-center flex justify-center items-center"
            @click="open = !open"
        >
            Topics <i :class="open ? 'fa-chevron-down': 'fa-chevron-up'" class="fas ml-2"></i>
        </a>
    </div>
    <div :class="open ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
        <div class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2">
            <a href="/" class="hover:bg-gray-400 rounded py-2 px-4 mx-2 @isset($category) @else bg-gray-300 @endisset">Home</a>
            @foreach ($categories as $menuCategory)
                    <a href="{{$menuCategory->publicPath()}}" class="hover:bg-gray-400 rounded py-2 px-4 mx-2 @isset($category) @if ($menuCategory == $category) bg-gray-300 @endif @endisset">{{$menuCategory->name}}</a>
            @endforeach
        </div>
    </div>
</nav>
    @yield('content')
<footer class="w-full border-t bg-white pb-12">

    <div class="w-full container mx-auto flex flex-col items-center">
        <div class="flex flex-col md:flex-row text-center md:text-left md:justify-between py-6">
            <a href="/about-us" class="uppercase px-3">About Us</a>
            <a href="/privacy-policy" class="uppercase px-3">Privacy Policy</a>
            <a href="/terms-and-conditions" class="uppercase px-3">Terms & Conditions</a>
            <a href="/contact-us" class="uppercase px-3">Contact Us</a>
        </div>
        <div class="uppercase pb-6">&copy; {{env("CONTENTS_COPYRIGHTEDBY") }}</div>
        <p>{{env("CONTENTS_COPYRIGHTDISCLAIMER")}}</p>
    </div>
</footer>
</body>
</html>
