@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Yazıyı Güncelle</h1>


    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')


        <div class="mb-3">
            <label for="title" class="form-label">Başlık</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title) }}" required>
        </div>


        <div class="mb-3">
            <label for="content" class="form-label">İçerik</label>
            <textarea class="form-control" id="content" name="content" rows="5" required>{{ old('content', $post->content) }}</textarea>
        </div>


        <button type="submit" class="btn btn-primary">Yazıyı Güncelle</button>
    </form>
</div>
@endsection
