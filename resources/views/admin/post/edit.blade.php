@extends('template_backend.home')
@section('titlehead', 'Form Edit Post')
@section('subjudul','Edit Post')
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
<form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="card" style="padding: 15px;">
        <div class="form-group">
            <label>Judul</label>
            <input type="text" class="form-control"  name="judul" value="{{ $post->judul }}">
        </div>
        <div class="form-group">
            <label>Kategori</label>
            <select class="form-control" name="category_id" >
                <option value="" holder>Pilih Kategori</option>
                @foreach($category as $result)
                <option value="{{ $result->id }}"
                    @if($post->category_id == $result->id)
                    selected
                    @endif
                    >{{ $result->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Pilih Tags</label>
                <select class="select2" multiple="multiple" data-placeholder="" style="width: 100%;" name="tags[]">
                    @foreach($tags as $tag)
                    <option value="{{ $tag->id }}"
                        @foreach($post->tags as $value)
                        @if($tag->id == $value->id)
                        selected 
                        @endif
                        @endforeach
                        >{{ $tag->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Buat Menjadi Featured Post</label>
                    <select class="form-control" name="featured">
                        <option value="" holder>Pilihan</option>
                        <option value="1"
                        @if($post->featured == 1)
                        selected
                        @endif 
                        >Ya</option>
                        <option value="0"
                        @if($post->featured == 0)
                        selected
                        @endif
                        >Tidak</option>
                    </select>        
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <textarea class="form-control" name="content" id="content">{{ $post->content }}</textarea>
                </div>
                <div class="form-group">
                    <label>Thumbnail Post</label>
                    <input type="file" name="gambar" class="form-control">        
                </div>
                <div class="form-group">
                    <button class="btn btn-block btn-primary">Update Postingan</button>
                    <a href="{{route('post.index')}}" class="btn btn-block btn-danger">Kembali</a>
                </div>
            </div>
        </form>
        <script src="{{asset('public')}}/ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'content' );
        </script>
        @endsection