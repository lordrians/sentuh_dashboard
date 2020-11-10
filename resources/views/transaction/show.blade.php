@extends('layout/main')
@section('title', 'About')
@section('container')
<div class="container">
  <div class="row">
    <div class="col">
      <h1 class="mt-3">Daftar Mahasiswa</h1>
        <div class="card" >
          {{-- <div class="card-body">
            <h5 class="card-title">{{$transaction->name}}</h5>
            <h5 class="card-title">{{$transaction->stuff->name}}</h5>
            <h5 class="card-title">{{$transaction->stuff->category->name}}</h5>
            <h5 class="card-title">{{$transaction->mahasiswa->nama}}</h5>
            <h5 class="card-title">{{$transaction->total_stuff}}</h5> --}}
          <div class="card-body">

            <ul class="list-group list-group-flush">
              
              <li class="list-group-item"><a class="text-muted col">Nama Mahasiswa</a> {{$transaction->mahasiswa->nama}}</li>
              <li class="list-group-item"><a class="text-muted col">Nama Barang</a>{{$transaction->stuff->name}}</li>
              <li class="list-group-item"><a class="text-muted col">Nama Kategori</a>{{$transaction->stuff->category->name}}</li>
              <li class="list-group-item"><a class="text-muted col">Jumlah Barang</a>{{$transaction->total_stuff}}</li>
              
            </ul>

            <a href="{{$transaction->id}}/edit" class="btn btn-primary">Edit</a>
            
            <form action="{{ $transaction->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
            <a href="/stuff" class="card-link">Kembali</a>
          </div>
        </div>


      
    </div>
  </div>
</div>
@endsection
