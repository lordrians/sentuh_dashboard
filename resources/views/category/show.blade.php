@extends('layout/main')
@section('title', 'About')
@section('container')
<div class="container">
  <div class="row">
    <div class="col">
      <h1 class="mt-3">Daftar Category</h1>
        <div class="card" >
          
          <div class="card-body">
            <li class="list-group-item"><a class="text-muted col">Nama Barang</a>{{$category->name}}</li>
            <a href="{{$category->id}}/edit" class="btn btn-primary">Edit</a>
            
            <form action="{{ $category->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
            <a href="/category" class="card-link">Kembali</a>
          </div>
        </div>


      
    </div>
  </div>
</div>
@endsection
