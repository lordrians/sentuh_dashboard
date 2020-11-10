@extends('layout/main')
@section('title', 'About')
@section('container')
<div class="container">
  <div class="row">
    <div class="col">
      <h1 class="mt-3">Daftar Mahasiswa</h1>
        <div class="card" >
          <div class="card-body">
            <h5 class="card-title">{{$mahasiswa->nama}}</h5>
            <h6 class="card-subtitle mb-2 mt-3 text-muted">NIM : {{$mahasiswa->nim}}</h6>
          </div>

          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <a class="text-muted col">Alamat</a>{{$mahasiswa->alamat}}
            </li>
            <li class="list-group-item"><a class="text-muted col">Jenis Kelamin</a> {{$mahasiswa->jk}}</li>
            <li class="list-group-item"><a class="text-muted col">Jurusan</a>{{$mahasiswa->jurusan}}</li>
            <li class="list-group-item"><a class="text-muted col">Prodi</a>{{$mahasiswa->prodi}}</li>
            <li class="list-group-item"><a class="text-muted col">Kelas</a>{{$mahasiswa->kelas}}</li>
            <li class="list-group-item"><a class="text-muted col">Angkatan</a>{{$mahasiswa->angkatan}}</li>
          </ul>
          
          <div class="card-body">
            <a href="{{$mahasiswa->id}}/edit" class="btn btn-primary">Edit</a>
            
            <form action="{{ $mahasiswa->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
            <a href="/mahasiswa" class="card-link">Kembali</a>
          </div>
        </div>


      
    </div>
  </div>
</div>
@endsection
