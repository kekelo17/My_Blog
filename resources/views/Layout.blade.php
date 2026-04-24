<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
    {{-- Hide header/footer on login/register pages --}}
    @unless(request()->is('login') || request()->is('register'))
        <x-Navbar/>
    @endunless

    @if(request()->is('login') || request()->is('register'))
        <main class="flex-1 flex items-center justify-center px-4 py-8">
            @yield('content')
        </main>
    @else
        <main class="flex-1 container mx-auto px-4 py-8">
            @yield('content')
        </main>
    @endif

    @unless(request()->is('login') || request()->is('register'))
        <x-Footer/>
    @endunless
</body>
</html>
</html>