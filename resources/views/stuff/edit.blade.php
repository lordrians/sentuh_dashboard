@extends('layout/main')

@section('title', 'Form Ubah Barang')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-6">
      <h1 class="mt-3">Ubah Data Barang</h1>
      <form method="post" action="/stuff/{{$stuff->id}}" enctype="multipart/form-data">
      @method('put')
      @csrf
        <div class="form-group">
            <label for="name">Nama Barang</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Masukan name" name="name" value="{{ $stuff->name }}">
            @error('name') <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
          <label for="">ID Kategori Barang</label>
            <select class="form-control" name="id_category">
            <option value="{{$stuff->category->id}}">{{$stuff->category->name}}</option>
              @foreach($category as $category)
                <option value="{{$category -> id}}">{{$category -> name}}</option>
              @endforeach
            </select>
          </div>
        <div class="form-group">
          <label >Photo Barang</label>
          <input type="file" class="form-control" name="photo" id="photo">
          <img src="{{ asset('storage/photo/' . $stuff->photo) }}"  class="img-thumbnail">
        </div>
        <button type="submit" class="btn btn-primary">Ubah Data!</button>
    </form>
    </div>
  </div>
</div>
@endsection

