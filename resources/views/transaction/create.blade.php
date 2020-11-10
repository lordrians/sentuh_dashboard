@extends('layout/main')
@section('title', 'Form Tambah Transaction')
@section('container')
<div class="container">
  <div class="row">
    <div class="col-6">
      <h1 class="mt-3">Tambah Transaction</h1>
      <form method="post" action="/transaction" enctype="multipart/form-data">
      @csrf
        <div class="form-group">
        <label for="">Nama Mahasiswa</label>
          <select class="form-control" name="id_mahasiswa">
          <option>Masukan Mahasiswa</option>
            @foreach($mahasiswa as $mahasiswa)
              <option value="{{$mahasiswa->id}}">{{$mahasiswa->nama}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="">Nama Barang</label>
            <select class="form-control" name="id_stuff">
            <option>Masukkan Barang</option>
              @foreach($stuff as $stuff)
                <option value="{{$stuff -> id}}">{{$stuff -> name}}</option>
              @endforeach
            </select>
          </div>
        <div class="form-group">
            <label for="total">Total Barang</label>
            <input type="text" class="form-control @error('total') is-invalid @enderror" id="total" placeholder="Masukan total" name="total_stuff" value="{{ old('total_stuff') }}">
            @error('total') <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Tambah Data!</button>
    </form>
    </div>
  </div>
</div>
@endsection
