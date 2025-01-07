@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Yeni Yazı Ekle</h1>


    <form action="{{ route('posts.store') }}" method="POST">
        @csrf


        <div class="mb-3">
            <label for="title" class="form-label">Başlık</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>


        <div class="mb-3">
            <label for="content" class="form-label">İçerik</label>
            <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
        </div>


        <button type="submit" class="btn btn-primary">Yazıyı Kaydet</button>
    </form>
</div>
@endsection
