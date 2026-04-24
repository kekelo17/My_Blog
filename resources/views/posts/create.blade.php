@extends('Layout')
@section('title','Create Post')
@section('content')
<div class="max-w-2xl mx-auto p-4 bg-white rounded shadow">
    <h1 class="text-xl font-bold mb-4">Create Post</h1>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form method="POST" action="/posts">
        @csrf
        <input name="title" placeholder="Title" class="w-full p-2 border rounded mb-3" />
        <textarea name="content" placeholder="Content" class="w-full p-2 border rounded mb-3" rows="6"></textarea>
        <button class="bg-blue-500 text-white px-4 py-2 rounded">Publish</button>
    </form>
</div>
@endsection
