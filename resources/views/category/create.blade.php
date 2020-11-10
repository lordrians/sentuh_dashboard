@extends('layout/main')
@section('title', 'Form Tambah Category')
@section('container')
<div class="container">
  <div class="row">
    <div class="col-6">
      <h1 class="mt-3">Tambah Category</h1>
      <form method="post" action="/category">
      @csrf
        {{-- <div class="form-group">
        <label for="">ID Kategori Barang</label>
          <select class="form-control" name="id_category">
          <option>Masukkan Kategori</option>
            @foreach($category as $category)
              <option value="{{$category -> id}}">{{$category -> name}}</option>
            @endforeach
          </select>
        </div> --}}

        <div class="form-group">
            <label for="name">Nama Kategori</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Masukan name" name="name" value="{{ old('name') }}">
            @error('name') <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Tambah Data!</button>
    </form>
    </div>
  </div>
</div>
@endsection
