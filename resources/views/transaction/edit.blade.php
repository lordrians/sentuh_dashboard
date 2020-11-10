@extends('layout/main')

@section('title', 'Form Ubah Peminjam')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-6">
      <h1 class="mt-3">Ubah Data Peminjam</h1>
      <form method="post" action="/transaction/{{$transaction->id}}" enctype="multipart/form-data">
      @method('put')
      @csrf
        <div class="form-group">
        <label for="">Nama Mahasiswa</label>
          <select class="form-control" name="id_mahasiswa">
          <option value="{{$transaction->mahasiswa->id}}">{{$transaction->mahasiswa->nama}}</option>
            @foreach($mahasiswa as $mahasiswa)
              <option value="{{$mahasiswa->id}}">{{$mahasiswa->nama}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="">Nama Barang</label>
            <select class="form-control" name="id_stuff">
            <option value="{{$transaction->stuff->id}}">{{$transaction->stuff->name}}</option>
              @foreach($stuff as $stuff)
                <option value="{{$stuff -> id}}">{{$stuff -> name}}</option>
              @endforeach
            </select>
          </div>
        <div class="form-group">
            <label for="total">Total Barang</label>
            <input type="text" class="form-control @error('total') is-invalid @enderror" id="total" placeholder="Masukan total" name="total_stuff" value="{{ $transaction->total_stuff }}">
            @error('total') <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Ubah Data!</button>
    </form>
    </div>
  </div>
</div>
@endsection

