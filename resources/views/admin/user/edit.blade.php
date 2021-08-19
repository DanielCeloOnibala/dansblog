@extends('template_backend.home')
@section('titlehead', 'Form Edit Data User')
@section('subjudul','Edit Akun User')
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
<form action="{{ route('user.update', $user->id) }}" method="POST" >
    @csrf
    @method('put')
<div class="card" style="padding: 15px;">
    <div class="form-group">
        <label>Nama User</label>
        <input type="text" class="form-control" name="name" value="{{ $user->name }}">
    </div>
    <div class="form-group">
        <label>E-mail</label>
        <input type="email" class="form-control" name="email" value="{{ $user->email }}" readonly="">
    </div>
    <div class="form-group">
        <label>Status User</label>
        <select class="form-control" name="tipe">
            <option value="" holder>Pilih Status User</option>
            <option value="1"
            @if($user->tipe == 1)
            selected
            @endif 
            >Administrator</option>
            <option value="0"
            @if($user->tipe == 0)
            selected
            @endif
            >Penulis</option>
        </select>        
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password">
    </div>
    <div class="form-group">
        <button class="btn btn-block btn-primary">Update Akun User</button>
        <a href="{{route('user.index')}}" class="btn btn-block btn-danger">Kembali</a>
    </div>
</div>
</form>
@endsection