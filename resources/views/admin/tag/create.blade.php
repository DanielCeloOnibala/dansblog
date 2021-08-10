@extends('template_backend.home')
@section('subjudul','Tambah Tags')
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
<form action="{{ route('tag.store') }}" method="POST" >
    @csrf
    <div class="form-group">
        <label>Tags</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <button class="btn btn-block btn-primary">Simpan Tags</button>
    </div>
</form>
@endsection