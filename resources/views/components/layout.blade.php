@php use Illuminate\Support\Facades\Vite; @endphp
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pixel Positions</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..600;1,100..600&display=swap" rel="stylesheet">
{{--    <script src="https://cdn.tailwindcss.com"></script>--}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-black text-white font-hanken-grotesk">
<div class="px-10 ">
    <nav class="flex justify-between items-center py-4 border-b border-b-white/20">

        <div class="">
            <a href="/">
                <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="logo">
            </a>
        </div>

        <div class="space-x-5 px-5 py-2 bg-gray-400/50 rounded-4xl text-bold ">
            <a href="#" class="hover:bg-gray-400/80 px-4 py-2 rounded-4xl transition-colors duration-400">Jobs</a>
            <a href="#" class="hover:bg-gray-400/80 px-4 py-2 rounded-4xl transition-colors duration-400">Careers</a>
            <a href="#" class="hover:bg-gray-400/80 px-4 py-2 rounded-4xl transition-colors duration-400">Salaries</a>
            <a href="#" class="hover:bg-gray-400/80 px-4 py-2 rounded-4xl transition-colors duration-400">Companies</a>
        </div>
        @auth
            <div class="hover:bg-gray-400/50 px-4 py-2 rounded-4xl transition-colors duration-400 flex space-x-8">
                <a class="hover:bg-gray-400/80 px-2 py-1 rounded-4xl transition-colors duration-400"href="/jobs/create">Post a Job</a>

            <form action="/logout" method="POST">
                @csrf
                @method('DELETE')
                <button class="hover:bg-gray-400/80 px-2 py-1 rounded-4xl transition-colors duration-400">Logout</button>
            </form>
            </div>

        @endauth

        @guest
            <div class="space-x-1 px-3 py-2 bg-gray-400/50 rounded-4xl text-bold ">
                <a href="/register" class="hover:bg-gray-400/80 px-4 py-2 rounded-4xl transition-colors duration-400">Register</a>
                <a href="/login" class="hover:bg-gray-400/80 px-4 py-2 rounded-4xl transition-colors duration-400">Sign In</a>
            </div>
        @endguest


    </nav>
    <main class="mt-10 max-w-[986px] mx-auto">
        {{$slot}}

    </main>
</div>

</body>
</html>
