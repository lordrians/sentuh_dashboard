@extends('layout/main')

@section('title', 'Form Ubah Category')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-6">
      <h1 class="mt-3">Ubah Data Category</h1>
      <form method="post" action="/category/{{$category->id}}">
      @method('put')
      @csrf
        <div class="form-group">
            <label for="name">Nama Kategori</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Masukan name" name="name" value="{{ $category->name }}">
            @error('name') <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Ubah Data!</button>
    </form>
    </div>
  </div>
</div>
@endsection

