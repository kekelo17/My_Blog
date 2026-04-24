@extends('Layout')
@section('title','Posts')
@section('content')
<div class="max-w-3xl mx-auto p-4">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Posts</h1>
        @auth
        <a href="/posts/create" class="bg-blue-500 text-white px-4 py-2 rounded">Create</a>
        @endauth
    </div>

    @foreach($posts as $post)
    <div class="bg-white p-4 rounded shadow mb-4">
        <h2 class="text-xl font-semibold"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
        <p class="text-sm text-gray-600">By {{ $post->user->name ?? 'Unknown' }} • {{ $post->created_at->diffForHumans() }}</p>
        <p class="mt-2">{{ Str::limit($post->content, 200) }}</p>
        <div class="mt-3 flex items-center gap-3">
            <form action="/posts/{{ $post->id }}/like" method="POST">
                @csrf
                <button class="text-sm bg-gray-100 px-2 py-1 rounded">Like ({{ $post->userliked_count }})</button>
            </form>
            <a href="/posts/{{ $post->id }}#comments" class="text-sm text-gray-600">Comments</a>
        </div>
    </div>
    @endforeach

    {{ $posts->links() }}
</div>
@endsection
