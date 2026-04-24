@extends('Layout')
@section('title')
    Registration
@endsection

@section('content')
<div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">
    <h2 class="text-2xl font-bold text-center mb-6">Create Account</h2>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form method="POST" action="/register">
        @csrf

        <input type="text" name="name" placeholder="Full Name"
            class="w-full p-3 border rounded-lg mb-4 focus:outline-none focus:ring-2 focus:ring-blue-400">

        <input type="email" name="email" placeholder="Email"
            class="w-full p-3 border rounded-lg mb-4 focus:outline-none focus:ring-2 focus:ring-blue-400">

        <input type="password" name="password" placeholder="Password"
            class="w-full p-3 border rounded-lg mb-4 focus:outline-none focus:ring-2 focus:ring-blue-400">

        <input type="password" name="password_confirmation" placeholder="Confirm Password"
            class="w-full p-3 border rounded-lg mb-6 focus:outline-none focus:ring-2 focus:ring-blue-400">

        <button class="w-full bg-blue-500 text-white p-3 rounded-lg hover:bg-blue-600 transition">
            Register
        </button>
    </form>

    <p class="text-sm text-center mt-4">
        Already have an account?
        <a href="/login" class="text-blue-500 hover:underline">Login</a>
    </p>
</div>
@endsection