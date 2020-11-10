@extends('layout/main')
@section('title', 'About')
@section('container')
<div class="container">
  <div class="row">
    <div class="col">
      <h1 class="mt-3">Daftar Mahasiswa</h1>
        <div class="card" >
          <div class="card-body">

            <ul class="list-group list-group-flush">
              
              <li class="list-group-item"><a class="text-muted col">Nama Barang</a> {{$stuff->name}}</li>
              <li class="list-group-item"><a class="text-muted col">Photo</a><img src="{{ asset('storage/photo/' . $stuff->photo) }}"  class="img-thumbnail"></li>
              
            </ul>

            <a href="{{$stuff->id}}/edit" class="btn btn-primary">Edit</a>
            
            <form action="{{ $stuff->id }}" method="post" class="d-inline">
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
