@extends('template_backend.home')
@section('titlehead', 'Halaman Data User')
@section('subjudul','Users')
@section('content')
@if(Session::has('success'))
<div class="alert alert-warning" role="alert">
  {{ Session('success') }}
</div>
@endif
<a href="{{ route('user.create') }}" class="btn btn-sm btn-info">Tambah User</a>
<br><br>
<div class="card" style="padding: 15px;">
<table class="table table-striped table-hover table-sm">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama User</th>
            <th>E-mail</th>
            <th>Status User</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($user as $result => $hasil)
        <tr>
            <td>{{ $result + $user->firstItem() }}</td>
            <td>{{ $hasil->name }}</td>
            <td>{{ $hasil->email }}</td>
            <td>
                @if($hasil->tipe)
                    <h5><span class="badge badge-info">Administrator</span></h5>
                    @else
                    <h6><span class="badge badge-warning">Penulis</span></h6>
                @endif
            </td>
            <td>                
                <form action="{{ route('user.destroy', $hasil->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="{{ route('user.edit', $hasil->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
{{ $user->links() }}


@endsection