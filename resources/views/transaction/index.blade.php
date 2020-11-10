@extends('layout/main')
@section('title', 'Daftar Peminjam')
@section('container')
<div class="container">
  <div class="row">
    <div class="col">
      <h1 class="mt-3">Daftar Peminjam</h1>
      <a href="/transaction/create" class="btn btn-primary my-3">Tambah Peminjam</a>
      @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
      @endif
      <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Mahasiswa</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Nama Category Barang</th>
                <th scope="col">Jumlah Barang</th>
                <th scope="col">Aksi</th>
            <tr>
        </thead>
        <tbody>
            @foreach ( $transaction as $itemtransaction )
            <tr>
            <td>{{ ($transaction->currentPage()-1) * $transaction->perPage() + $loop->index + 1 }}</td>
                <!-- <th scope="row">{{ $loop->iteration }}</th> -->
                <td>{{ $itemtransaction->mahasiswa->nama }}</td>
                <td>{{ $itemtransaction->stuff->name }}</td>
                <td>{{ $itemtransaction->stuff->category->name }}</td> 
                <td>{{ $itemtransaction->total_stuff }}</td>
                <td>
                  <a href="/transaction/{{ $itemtransaction->id }}" class="btn btn-primary">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      <div class="text-center">{{ $transaction->links() }}<div>
      <div>
        <strong>Total Peminjaman : {{$total}} </strong>
      </div>
    </div>
  </div>
</div>
@endsection
