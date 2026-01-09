@extends('layouts.main')

@section('title', 'Tambah Post')

@section('content')

<div class="main-content">
<div class="section__content section__content--p30">
<div class="container-fluid">
<div class="row">
<div class="col-lg-6">
<div class="card">
<div class="card-header">Tambah Post</div>
<div class="card-body">
<form action="../posts" method="POST">
    @csrf

    <div>
        <label>Judul</label><br>
        <input type="text" name="title" value="{{ old('title') }}" class="form-control"><br>
        @error('title')
            <small style="color:red">{{ $message }}</small>
        @enderror
    </div>
    <div>
        <label>Penulis</label><br>
        <input type="text" name="author" value="{{ old('author') }}" class="form-control"><br>
        @error('author')
            <small style="color:red">{{ $message }}</small>
        @enderror
    </div>

    <div>
        <label>Konten</label><br>
        <textarea name="content" class="form-control">{{ old('content') }}</textarea><br>
        @error('content')
            <small style="color:red">{{ $message }}</small>
        @enderror
    </div>

    <button type="submit" class="btn btn-danger">Simpan</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

@endsection
