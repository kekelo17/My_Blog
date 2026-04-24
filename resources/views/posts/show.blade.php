@extends('Layout')
@section('title', $post->title)
@section('content')
<div class="max-w-3xl mx-auto p-4">
    <div class="bg-white p-4 rounded shadow">
        <h1 class="text-2xl font-bold">{{ $post->title }}</h1>
        <p class="text-sm text-gray-600">By {{ $post->user->name ?? 'Unknown' }} • {{ $post->created_at->diffForHumans() }}</p>
        <div class="mt-4">{{ $post->content }}</div>
        <div class="mt-4">
            <form action="/posts/{{ $post->id }}/like" method="POST">
                @csrf
                <button class="bg-gray-100 px-3 py-1 rounded">Like ({{ $post->userliked->count() }})</button>
            </form>
        </div>
    </div>

    <div id="comments" class="mt-6">
        <h2 class="text-lg font-semibold">Comments</h2>

        @auth
        <form method="POST" action="/posts/{{ $post->id }}/comments" class="mt-3">
            @csrf
            <textarea name="comment" rows="3" class="w-full p-2 border rounded mb-2" placeholder="Write a comment"></textarea>
            <button class="bg-blue-500 text-white px-3 py-1 rounded">Comment</button>
        </form>
        @endauth

        @foreach($post->comments ?? [] as $comment)
            <div class="bg-white p-3 rounded mt-3">
                <p class="text-sm text-gray-600">{{ $comment->user->name ?? 'Unknown' }} • {{ $comment->created_at->diffForHumans() }}</p>
                <p class="mt-2">{{ $comment->comment }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection
