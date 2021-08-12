@extends('template_backend.home')
@section('titlehead', 'Halaman Recycle Post')
@section('subjudul','Recycle Bin Postingan')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
  {{ Session('success') }}
</div>
@endif
<table class="table table-striped table-hover table-sm">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Post</th>
            <th>Daftar Tags</th>
            <th>Thumbnail</th>
            <th>Penulis</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($post as $result => $hasil)
        <tr>
            <td>{{ $result + $post->firstItem() }}</td>
            <td>{{ $hasil->judul }}</td>
            <td>
                @foreach($hasil->tags as $tag)
                <ul>
                    <li>{{$tag->name}}</li>                    
                </ul>
                @endforeach
            </td>
            <td><img src="{{asset($hasil->gambar)}}" class="img-fluid" style="width: 100px"></td>
            <td>{{ $hasil->users->name }}</td>
            <td>           
                <form action="{{ route('post.kill', $hasil->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="{{ route('post.restore', $hasil->id) }}" class="btn btn-sm btn-info">Restore</a>
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $post->links() }}


@endsection