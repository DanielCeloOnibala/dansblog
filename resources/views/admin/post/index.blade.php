@extends('template_backend.home')
@section('titlehead', 'Halaman Data Post')
@section('subjudul','Post')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
  {{ Session('success') }}
</div>
@endif
<a href="{{ route('post.create') }}" class="btn btn-sm btn-info">Tambah Post</a>
<br><br>
<div class="card" style="padding: 8px;">
    <div class="card-header">
        <i class="fas fa-table">&nbsp;&nbsp;</i>
        Data-data Artikel dan Postingan
    </div>
    <div class="body">
        <table class="table table-striped table-hover table-sm">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Post</th>
                    <th>Featured Post</th>
                    <th>Kategori Post</th>
                    <th>Daftar Tags</th>
                    <th>Nama Penulis</th>
                    <th>Thumbnail</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($post as $result => $hasil)
                <tr>
                    <td>{{ $result + $post->firstItem() }}</td>
                    <td>{{ $hasil->judul }}</td>
                    <td>
                        @if($hasil->featured)
                        <h5><span class="badge badge-info">Ya</span></h5>
                        @else
                        <h6><span class="badge badge-warning">Tidak</span></h6>
                        @endif
                    </td>
                    <td>{{ $hasil->category->name }}</td>
                    <td>
                        @foreach($hasil->tags as $tag)
                        <ul>
                            <h6><span class="badge badge-info">{{$tag->name}}</span></h6>                    
                        </ul>
                        @endforeach
                    </td>
                    <td>{{ $hasil->users->name }}</td>
                    <td><img src="{{asset($hasil->gambar)}}" class="img-fluid" style="width: 100px"></td>
                    <td align="center">                
                        <form action="{{ route('post.destroy', $hasil->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="{{ route('post.edit', $hasil->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $post->links() }}
</div>


@endsection
