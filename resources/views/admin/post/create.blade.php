@extends('template_backend.home')
@section('titlehead', 'Form Pembuatan Post')
@section('subjudul','Tambah Post')
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
<form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="card" style="padding: 15px;">
    <div class="form-group">
        <label>Judul</label>
        <input type="text" class="form-control"  name="judul">
    </div>
    <div class="form-group">
        <label>Kategori</label>
        <select class="form-control" name="category_id">
            <option value="" holder>Pilih Kategori</option>
            @foreach($category as $result)
            <option value="{{ $result->id }}">{{ $result->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Pilih Tags</label>
      <select class="select2" multiple="multiple" data-placeholder="" style="width: 100%;" name="tags[]">
        @foreach($tags as $tag)
            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label>Content</label>
    <textarea class="form-control" name="content" id="content"></textarea>
</div>
<div class="form-group">
    <label>Thumbnail Post</label>
    <input type="file" name="gambar" class="form-control">        
</div>
<div class="form-group">
    <button class="btn btn-block btn-primary">Simpan Postingan</button>
    <a href="{{route('post.index')}}" class="btn btn-block btn-danger">Kembali</a>
</div>
</div>
</form>
<script src="{{asset('public')}}/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
@endsection
