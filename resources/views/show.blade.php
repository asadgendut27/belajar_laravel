@extends('layouts.main')

@section('title', 'Show')

@section('content')
 
<a href="<?= url('posts/create') ?>" class="btn btn-danger">Input Data</a>
<table class="table table-bordered" width="100%">
<thead>    
<tr>
<th width="10">No.</th>
<th>Judul</th>
<th>Penulis</th>
<th>Isi</th>
<th>Dibuat</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
    
@foreach($posts as $post)    
<tr> 
<td align="center">{{ ++$i }}</td>  
<td>{{ $post->title }}</td>
<td>{{ $post->author }}</td>
<td>{{ $post->content }}</td>
<td>{{ $post->created_at }}</td>
<td><a href="<?= url('posts') ?>/{{ $post->id }}/edit" class="btn btn-success">Edit</a>
<form action="<?= url('posts') ?>/{{ $post->id }}" method="POST" style="display: inline;">
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Hapus</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>

{{ $posts->links() }}

@endsection