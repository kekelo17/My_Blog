<footer class="w-full bg-gray-50 border-t mt-8">
    <div class="max-w-6xl mx-auto px-4 py-8 text-sm text-gray-600 flex flex-col md:flex-row justify-between items-start gap-4">
        <div>
            <a href="/" class="font-bold text-gray-800">MyBlog</a>
            <p class="mt-2 text-xs">Simple blog demo • Built with Laravel</p>
        </div>

        <div class="flex gap-6">
            <div>
                <h4 class="font-semibold text-gray-800">Navigation</h4>
                <ul class="mt-2">
                    <li><a href="/posts" class="hover:underline">Posts</a></li>
                    <li><a href="/about" class="hover:underline">About</a></li>
                    <li><a href="/contact" class="hover:underline">Contact</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-semibold text-gray-800">Account</h4>
                <ul class="mt-2">
                    @guest
                    <li><a href="/login" class="hover:underline">Login</a></li>
                    <li><a href="/register" class="hover:underline">Register</a></li>
                    @else
                    <li><a href="/dashboard" class="hover:underline">Dashboard</a></li>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
</footer>