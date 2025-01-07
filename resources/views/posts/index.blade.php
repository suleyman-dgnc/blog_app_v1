<!-- resources/views/posts/index.blade.php -->
@extends('layouts.app')

@section('content')
    @if(session('success'))
        <div class="alert alert-success my-3">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger my-3">{{ session('error') }}</div>
    @endif

    <div class="d-flex flex-wrap">
        @forelse($posts as $post)
            <div class="card me-2" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>

                    <p class="card-text">{{ $post->content }}</p>

                    <div class="d-flex">
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary me-2">Düzenle</a>

                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Sil</button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <p>Henüz yazı yok.</p>
        @endforelse
    </div>
@endsection
