<header class="w-full bg-white shadow">
    <div class="max-w-6xl mx-auto px-4 py-3 flex items-center justify-between">
        <div class="flex items-center gap-4">
            <a href="/" class="text-xl font-bold text-gray-800">MyBlog</a>
            <nav class="hidden md:flex gap-3 text-sm text-gray-600">
                <a href="/posts" class="hover:text-gray-900">Posts</a>
                <a href="/about" class="hover:text-gray-900">About</a>
                <a href="/contact" class="hover:text-gray-900">Contact</a>
            </nav>
        </div>

        <div class="flex items-center gap-3">
            @guest
                <a href="/login" class="text-sm text-gray-700 hover:underline">Login</a>
                <a href="/register" class="text-sm bg-blue-500 text-white px-3 py-1 rounded">Register</a>
            @endguest

            @auth
                <span class="text-sm text-gray-700 mr-2">Hello, {{ auth()->user()->name }}</span>
                <a href="/posts/create" class="text-sm bg-green-500 text-white px-3 py-1 rounded">New Post</a>
                <form method="POST" action="/logout" class="inline-block ml-2">
                    @csrf
                    <button type="submit" class="text-sm text-red-600 hover:underline">Logout</button>
                </form>
            @endauth
        </div>
    </div>
</header>