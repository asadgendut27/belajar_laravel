@extends('layouts.main')

@section('title', 'Edit Post')

@section('content')
<div class="main-content">
<div class="section__content section__content--p30">
<div class="container-fluid">
<div class="row">
<div class="col-lg-6">
<div class="card">
<div class="card-header">Edit Post</div>
<div class="card-body">
<form action="<?= url('posts') ?>/{{ $post->id }}" method="POST">
    @csrf
    @method('PUT')
    
    <div>
    <label>Judul</label><br>
    <input type="text" name="title" value="{{ old('title', $post->title) }}" class="form-control"><br>
        @error('title')
            <small style="color:red">{{ $message }}</small>
        @enderror
    </div>
    <div>
    <label>Penulis</label><br>
    <input type="text" name="author" value="{{ old('author', $post->author) }}" class="form-control"><br>
        @error('author')
            <small style="color:red">{{ $message }}</small>
        @enderror
    </div>
    <div>
    <label>Konten</label><br>
    <textarea name="content" class="form-control">{{ old('content', $post->content) }}</textarea><br>
            @error('content')
            <small style="color:red">{{ $message }}</small>
        @enderror
    </div>
    <button type="submit" class="btn btn-danger">Update</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection