@extends('layout/main')
@section('title', 'Daftar Mahasiswa')
@section('container')
<div class="container">
  <div class="row">
    <div class="col">
      <h1 class="mt-3">Daftar Mahasiswa</h1>
      <a href="/mahasiswa/create" class="btn btn-primary my-3">Tambah Mahasiswa</a>
      @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
      @endif
      <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Angkatan</th>
                <th scope="col">Aksi</th>
            <tr>
        </thead>
        <tbody>
            @foreach ( $mahasiswa as $mhs )
            <tr>
            <td>{{ ($mahasiswa->currentPage()-1) * $mahasiswa->perPage() + $loop->index + 1 }}</td>
                <!-- <th scope="row">{{ $loop->iteration }}</th> -->
                <td>{{ $mhs->nim }}</td>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->jurusan }}</td>
                <td>{{ $mhs->angkatan }}</td>
                <td>
                  <a href="/mahasiswa/{{ $mhs->id }}" class="btn btn-primary">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      <div class="text-center">{{ $mahasiswa->links() }}<div>
      <div>
        <strong>Total Mahasiswa : {{$jml_mahasiswa}} </strong>
      </div>
    </div>
  </div>
</div>
@endsection
