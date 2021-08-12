@extends('template_backend.home')
@section('titlehead', 'Halaman Data Kategori')
@section('subjudul','Kategori')
@section('content')
@if(Session::has('success'))
<div class="alert alert-warning" role="alert">
  {{ Session('success') }}
</div>
@endif
<a href="{{ route('category.create') }}" class="btn btn-sm btn-info">Tambah Kategori</a>
<br><br>
<table class="table table-striped table-hover table-sm">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($category as $result => $hasil)
        <tr>
            <td>{{ $result + $category->firstItem() }}</td>
            <td>{{ $hasil->name }}</td>
            <td>                
                <form action="{{ route('category.destroy', $hasil->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="{{ route('category.edit', $hasil->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $category->links() }}


@endsection