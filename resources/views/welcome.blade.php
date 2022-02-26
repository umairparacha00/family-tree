<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
<div class='flex items-center justify-end relative'>
    <div class="px-6 py-4 fixed top-0 right-0">
        @auth
            <a href="{{ url('/dashboard') }}"
               class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
        @endauth
    </div>
</div>
<section class='mt-16 mx-auto w-4/5'>
    <div>
        <div class="flex flex-col text-center w-full mb-6" style="user-select: auto;">
            <h2 class="text-sm text-indigo-500 tracking-widest font-bold title-font mb-1" style="user-select: auto;">
                Shajra nasheen
            </h2>
            <h1 class="text-3xl font-extrabold text-center title-font text-gray-900" style="user-select: auto;">
                Aqib Mukhtar Awan</h1>
            <h2 class="text-lg text-indigo-500 tracking-widest font-bold title-font mb-1" style="user-select: auto;">
                03349584112
            </h2>
        </div>

        <div class='grid sm:grid-cols-2 gap-4'>
            <div>
                <img src='{{ asset('assets/images/pics/1.jpeg') }}'
                     class='w-full h-[300px] lg:h-[400px] rounded-lg shadow-xl object-cover'>
            </div>
            <div>
                <img src='{{ asset('assets/images/pics/5.jpeg') }}'
                     class='w-full h-[300px] lg:h-[400px] rounded-lg shadow-xl object-cover'>
            </div>
            <div>
                <img src='{{ asset('assets/images/pics/2.jpeg') }}'
                     class='w-full h-[300px] lg:h-[400px] rounded-lg shadow-xl object-cover'>
            </div>
            <div>
                <img src='{{ asset('assets/images/pics/3.jpeg') }}'
                     class='w-full h-[300px] lg:h-[400px] rounded-lg shadow-xl object-cover'>
            </div>
            <div>
                <img src='{{ asset('assets/images/pics/4.jpeg') }}'
                     class='w-full h-[300px] lg:h-[400px] rounded-lg shadow-xl object-cover'>
            </div>
            <div>
                <img src='{{ asset('assets/images/pics/6.jpeg') }}'
                     class='w-full h-[300px] lg:h-[400px] rounded-lg shadow-xl object-cover'>
            </div>
            <div>
                <img src='{{ asset('assets/images/pics/7.jpeg') }}'
                     class='w-full h-[300px] lg:h-[400px] rounded-lg shadow-xl object-cover'>
            </div>
            <div>
                <img src='{{ asset('assets/images/pics/8.jpeg') }}'
                     class='w-full h-[300px] lg:h-[400px] rounded-lg shadow-xl object-cover'>
            </div>
            <div>
                <img src='{{ asset('assets/images/pics/9.jpeg') }}'
                     class='w-full h-[300px] lg:h-[400px] rounded-lg shadow-xl object-cover'>
            </div>
            <div>
                <img src='{{ asset('assets/images/pics/10.jpeg') }}'
                     class='w-full h-[300px] lg:h-[400px] rounded-lg shadow-xl object-cover'>
            </div>
            <div>
                <img src='{{ asset('assets/images/pics/11.jpeg') }}'
                     class='w-full h-[300px] lg:h-[400px] rounded-lg shadow-xl object-cover'>
            </div>
        </div>
    </div>
</section>
</body>
</html>
