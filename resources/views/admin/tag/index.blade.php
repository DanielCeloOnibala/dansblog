@extends('template_backend.home')
@section('subjudul','Tags')
@section('content')
@if(Session::has('success'))
<div class="alert alert-warning" role="alert">
  {{ Session('success') }}
</div>
@endif
<a href="{{ route('tag.create') }}" class="btn btn-sm btn-info">Tambah Tags</a>
<br><br>
<table class="table table-striped table-hover table-sm">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Tag</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tags as $result => $hasil)
        <tr>
            <td>{{ $result + $tags->firstItem() }}</td>
            <td>{{ $hasil->name }}</td>
            <td>                
                <form action="{{ route('tag.destroy', $hasil->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="{{ route('tag.edit', $hasil->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $tags->links() }}


@endsection