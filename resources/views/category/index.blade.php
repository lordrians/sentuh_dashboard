@extends('layout/main')
@section('title', 'Daftar Category')
@section('container')
<div class="container">
  <div class="row">
    <div class="col">
      <h1 class="mt-3">Daftar Category</h1>
      <a href="/category/create" class="btn btn-primary my-3">Tambah Category</a>
      @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
      @endif
      <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Kategori</th>
                <th scope="col">Aksi</th>
            <tr>
        </thead>
        <tbody>
            @foreach ( $category as $itemCategory )
            <tr>
            <td>{{ ($category->currentPage()-1) * $category->perPage() + $loop->index + 1 }}</td>
                <!-- <th scope="row">{{ $loop->iteration }}</th> -->
                <td>{{ $itemCategory->name }}</td>
                <td>
                  <a href="/category/{{ $itemCategory->id }}" class="btn btn-primary">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      <div class="text-center">{{ $category->links() }}<div>
      <div>
        <strong>Total category : {{$total_category}} </strong>
      </div>
    </div>
  </div>
</div>
@endsection
