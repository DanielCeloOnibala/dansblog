@extends('template_backend.home')
@section('subjudul','Tambah User')
@section('content')
@if(count($errors)>0)
@foreach($errors->all() as $error)
<div class="alert alert-danger" role="alert">
    {{ $error }}
</div>
@endforeach
@endif

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
  {{ Session('success') }}
</div>
@endif
<form action="{{ route('user.store') }}" method="POST" >
    @csrf
    <div class="form-group">
        <label>Nama User</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label>E-mail</label>
        <input type="email" class="form-control" name="email">
    </div>
    <div class="form-group">
        <label>Status User</label>
        <select class="form-control" name="tipe">
            <option value="" holder>Pilih Status User</option>
            <option value="1">Administrator</option>
            <option value="0">Penulis</option>
        </select>        
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password">
    </div>
    <div class="form-group">
        <button class="btn btn-block btn-primary">Buat Akun User Baru</button>
    </div>
</form>
@endsection