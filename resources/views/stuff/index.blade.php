@extends('layout/main')
@section('title', 'Daftar Barang')
@section('container')
<div class="container">
  <div class="row">
    <div class="col">
      <h1 class="mt-3">Daftar Barang</h1>
      <a href="/stuff/create" class="btn btn-primary my-3">Tambah Barang</a>
      @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
      @endif
      <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Kategori</th>
                <th scope="col">Aksi</th>
            <tr>
        </thead>
        <tbody>
            @foreach ( $stuff as $itemStuff )
            <tr>
            <td>{{ ($stuff->currentPage()-1) * $stuff->perPage() + $loop->index + 1 }}</td>
                <!-- <th scope="row">{{ $loop->iteration }}</th> -->
                <td>{{ $itemStuff->name }}</td>
                @if ($itemStuff->id_category != null)
                  <td>{{ $itemStuff->category->name }}</td> 
                @else 
                  <td>{{ $itemStuff->id_category }}</td> 
                @endif
                {{-- <td><img src="{{ asset('storage/photo/' . $itemStuff->photo) }}"  class="img-thumbnail"></td> --}}
                
                <td>
                  <a href="/stuff/{{ $itemStuff->id }}" class="btn btn-primary">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      <div class="text-center">{{ $stuff->links() }}<div>
      <div>
        <strong>Total stuff : {{$total_stuff}} </strong>
      </div>
    </div>
  </div>
</div>
@endsection
