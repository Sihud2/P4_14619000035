@extends('layout.navbar');

@section('content')
<h1 class="text-center mt-3 mb-3">Data Buku</h1>
<div class="eksport mt-2 mb-2">
  <a href="/ekspor" class="btn btn-success">Eksport Excel</a>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">NO</th>
        <th scope="col">Judul Buku</th>
        <th scope="col">Tahun terbit</th>
        <th scope="col">Jenis Buku</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($buku as $book)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $book->judul }}</td>
          <td>{{ $book->tahun_terbit }}</td>
          <td>{{ $book->jenis }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
  @endsection