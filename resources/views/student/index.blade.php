@extends('layout/main')

@section('title', 'Daftar Siswa')

@section('container')
<div class="container">
  <div class="row">
    <div class="col">
      <h1 class="mt-3">Daftar Siswa</h1>
      <a href="/student/create" class="btn btn-primary my-3">Tambah Siswa</a>
      
      @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
      @endif

      <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">NISN</th>
                <th scope="col">NAMA</th>
                <th scope="col">Gender</th>
                <th scope="col">Alamat</th>
                <th scope="col">ASAL SEKOLAH</th>
                <th scope="col">Aksi</th>
            <tr>
        </thead>
        <tbody>
            @foreach ( $student_list as $student )
            <tr>
                <td>{{ ($student_list->currentPage()-1) * $student_list->perPage() + $loop->index + 1 }}</td>
                <!-- <th scope="row">{{ $loop->iteration }}</th> -->
                <td>{{ $student->nisn }}</td>
                <td>{{ $student->nama }}</td>
                <td>{{ $student->jk }}</td>
                <td>{{ $student->alamat }}</td>
                <td>{{ $student->asal_sekolah }}</td>
                <td>
                  <a href="/student/{{ $student->id }}" class="btn btn-primary">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>

      </table>
      <div class="text-center">
        {{ $student_list->links() }}
      <div>

      <div>
        <strong>Total Siswa : {{$count_student}} </strong>
      </div>
      
    </div>
  </div>
</div>
@endsection
