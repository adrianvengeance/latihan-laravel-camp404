@extends('template')

@section('content')
  <div class="jumbotron text-center">
    <h1 class="display-4">Portal Informasi Siswa</h1>
    <p class="lead">Selamat datang di Portal Informasi Siswa Kampus 404!</p>
    {{-- <hr class="my-4"> --}}
    {{-- <p>It uses utility classes for typography and spacing to space content out within the larger container.</p> --}}
    <a class="btn btn-dark"
       href="#"
       role="button">Info Kegiatan</a>
    <a class="btn btn-primary"
       href="#"
       role="button">Data Siswa</a>
  </div>
@endsection
