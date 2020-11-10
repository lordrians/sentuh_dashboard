@extends('layout/main')
@section('title', 'Form Tambah Mahasiswa')
@section('container')
<div class="container">
  <div class="row">
    <div class="col-6">
      <h1 class="mt-3">Tambah Mahasiswa</h1>
      <form method="post" action="/mahasiswa">
      @csrf
      <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="Masukan NIM" name="nim" value="{{ old('nim') }}">
            @error('nim') <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama" name="nama" value="{{ old('nama') }}">
            @error('nama') <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukan Alamat" name="alamat" value="{{ old('alamat') }}">
            @error('alamat') <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="jk">Jenis Kelamin</label>
            <select id="jk" name="jk" class="form-control @error('jk') is-invalid @enderror" value="{{ old('jk') }}">
                <option></option>
                <option>Laki - Laki</option>
                <option>Perempuan</option>
            </select>
            @error('jk') <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select id="jurusan" name="jurusan" class="form-control @error('jurusan') is-invalid @enderror" value="{{ old('jurusan') }}">
                <option></option>
                <option>Teknik Informatika & Komputer</option>
                <option>Teknik Mesin</option>
                <option>Teknik Sipil</option>
                <option>Teknik Elektro</option>
            </select>
            @error('jurusan') <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="prodi">Program Studi</label>
            <select id="prodi" name="prodi" class="form-control @error('prodi') is-invalid @enderror" value="{{ old('prodi') }}">
            <option></option>
            <optgroup label="Teknik Informatika & Komputer">
              <option>Teknik Informatika (S.Tr)</option>
              <option>Teknik Multimedia Digital (S.Tr)</option>
              <option>Teknik Multimedia dan Jaringan (S.Tr)</option>
              <option>Teknik Komputer dan Jaringan</option>
            </optgroup>
            <optgroup label="Teknik Mesin">
              <option>Teknik Mesin (D3)</option>
              <option>Teknik Konversi Energi (D3)</option>
              <option>Teknik Alat Berat (D3)</option>
              <option>Manufaktur (S.Tr)</option>
            </optgroup>
            <optgroup label="Teknik Elektro">
              <option>Teknik Listrik (D3)</option>
              <option>Telekomunikasi (D3)</option>
              <option>Teknik Otomasi Listrik Industri (S.Tr)</option>
              <option>Broadband Multimedia (S.Tr)</option>
            </optgroup>
            <optgroup label="Teknik Sipil">
              <option>Konstruksi Sipil (S.Tr)</option>
              <option>Teknik Perancangan Jalan dan Jembatan  (S.Tr)</option>
              <option>Teknik Konstruksi Gedung (S.Tr)</option>
              <option>Konstruksi Gedung (D3)</option>
            </optgroup>
            </select>
            @error('prodi') <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="kelas">Kelas</label>
            <input type="text" class="form-control @error('kelas') is-invalid @enderror" id="kelas" placeholder="Masukan Kelas Anda" name="kelas" value="{{ old('kelas') }}">
            @error('kelas') <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="angkatan">Angkatan</label>
            <input type="text" class="form-control @error('angkatan') is-invalid @enderror" id="angkatan" placeholder="Masukan Angkatan Anda" name="angkatan" value="{{ old('angkatan') }}">
            @error('angkatan') <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambah Data!</button>
    </form>
    </div>
  </div>
</div>
@endsection
