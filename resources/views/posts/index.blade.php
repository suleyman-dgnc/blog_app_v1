<!-- resources/views/posts/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Blog Yazıları</h1>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    @if($posts->count() > 0)
        <ul>
            @foreach($posts as $post)
                <li>
                    <h3>{{ $post->title }}</h3>
                    <p>{{ $post->content }}</p>
                    <a href="{{ route('posts.edit', $post->id) }}"> <button type="submit" class="delete-button">Düzenle</button></a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-button">Sil</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @else
        <p>Henüz yazı yok.</p>
    @endif
@endsection
