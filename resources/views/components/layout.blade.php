@php use Illuminate\Support\Facades\Vite; @endphp
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pixel Positions</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white font-hanken-grotesk">
<div class="px-4 sm:px-10">
    <nav class="flex justify-between items-center py-4 border-b border-b-white/20">
        <a href="/" class="flex items-center space-x-2">
            <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="logo" class="h-8 sm:h-10">
        </a>

        <div class="hidden md:flex space-x-3 px-3 py-2 bg-gray-400/50 rounded-4xl font-semibold">
            <a href="#" class="hover:bg-gray-400/80 px-4 py-2 rounded-4xl transition-colors">Jobs</a>
            <a href="#" class="hover:bg-gray-400/80 px-4 py-2 rounded-4xl transition-colors">Careers</a>
            <a href="#" class="hover:bg-gray-400/80 px-4 py-2 rounded-4xl transition-colors">Salaries</a>
            <a href="#" class="hover:bg-gray-400/80 px-4 py-2 rounded-4xl transition-colors">Companies</a>
        </div>

        @auth
            <div class="hidden md:flex items-center space-x-3 bg-gray-400/50 px-3 py-2 rounded-4xl">
                <a href="/jobs/create" class="hover:bg-gray-400/80 px-3 py-2 rounded-4xl transition-colors">Post a Job</a>
                <form action="/logout" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="hover:bg-gray-400/80 px-3 py-2 rounded-4xl transition-colors">Logout</button>
                </form>
            </div>
        @endauth

        @guest
            <div class="hidden md:flex space-x-2 px-3 py-2 bg-gray-400/50 rounded-4xl font-semibold">
                <a href="/register" class="hover:bg-gray-400/80 px-3 py-2 rounded-4xl transition-colors">Register</a>
                <a href="/login" class="hover:bg-gray-400/80 px-3 py-2 rounded-4xl transition-colors">Sign In</a>
            </div>
        @endguest

        <button id="menu-toggle" class="md:hidden p-2 border border-gray-500 rounded-lg hover:bg-gray-700">
            ☰
        </button>
    </nav>

    <div id="mobile-menu" class="hidden md:hidden flex flex-col mt-3 space-y-2 bg-gray-900/90 p-4 rounded-xl">
        <a href="#" class="hover:bg-gray-700 px-3 py-2 rounded-lg transition-colors">Jobs</a>
        <a href="#" class="hover:bg-gray-700 px-3 py-2 rounded-lg transition-colors">Careers</a>
        <a href="#" class="hover:bg-gray-700 px-3 py-2 rounded-lg transition-colors">Salaries</a>
        <a href="#" class="hover:bg-gray-700 px-3 py-2 rounded-lg transition-colors">Companies</a>

        @auth
            <a href="/jobs/create" class="hover:bg-gray-700 px-3 py-2 rounded-lg transition-colors">Post a Job</a>
            <form action="/logout" method="POST">
                @csrf
                @method('DELETE')
                <button class="hover:bg-gray-700 w-full text-left px-3 py-2 rounded-lg transition-colors">Logout</button>
            </form>
        @endauth

        @guest
            <a href="/register" class="hover:bg-gray-700 px-3 py-2 rounded-lg transition-colors">Register</a>
            <a href="/login" class="hover:bg-gray-700 px-3 py-2 rounded-lg transition-colors">Sign In</a>
        @endguest
    </div>

    <main class="mt-10 max-w-[986px] mx-auto px-2">
        {{ $slot }}
    </main>
</div>

<script>
    document.getElementById('menu-toggle').addEventListener('click', () => {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>
</body>
</html>
