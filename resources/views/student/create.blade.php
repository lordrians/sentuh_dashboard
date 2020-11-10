@extends('layout/main')

@section('title', 'Form Tambah Siswa')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-6">
      <h1 class="mt-3">Tambah Siswa</h1>
      
      
      <form method="post" action="/student">
      @csrf
      <div class="form-group">
            <label for="nisn">NISN</label>
            <input type="text" class="form-control @error('nisn') is-invalid @enderror" id="nisn" placeholder="Masukan NIM" name="nisn" value="{{ old('nisn') }}">
            @error('nisn') <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama" name="nama" value="{{ old('nama') }}">
            @error('nama') <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="asal_sekolah">Asal Sekolah</label>
            <input type="text" class="form-control @error('asal_sekolah') is-invalid @enderror" id="asal_sekolah" placeholder="Masukan Asal Sekolah" name="asal_sekolah" value="{{ old('asal_sekolah') }}">
            @error('asal_sekolah') <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="jk">Jenis Kelamin</label>
            <select id="jk" name="jk" class="form-control @error('jk') is-invalid @enderror" value="{{ old('jk') }}">
                <option value="none" selected disabled hidden> 
                    Select an Option 
                </option> 
                <option>Laki - Laki</option>
                <option>Perempuan</option>
            </select>
            @error('jk') <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukan Alamat Anda" name="alamat" value="{{ old('alamat') }}">
            @error('alamat') <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>

        <button type="submit" class="btn btn-primary">Tambah Data!</button>
    </form>

      
    </div>
  </div>
</div>
@endsection
