@extends('template_backend.home')
@section('titlehead', 'Form Edit Kategori')
@section('subjudul','Edit Kategori')
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
<form action="{{ route('category.update', $category->id) }}" method="POST" >
    @csrf
    @method('patch')
    <div class="form-group">
        <label>Kategori</label>
        <input type="text" class="form-control" name="name" value="{{ $category->name }}">
    </div>
    <div class="form-group">
        <button class="btn btn-block btn-primary">Update Kategori</button>
        <a href="{{route('category.index')}}" class="btn btn-block btn-danger">Kembali</a>
    </div>
</form>
@endsection