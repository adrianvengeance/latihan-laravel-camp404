@extends('layouts.app')

@section('content')
  <div class="containter d-flex justify-content-center">
    <div class="card w-50">
      <div class="card-header">
        <h3>Profile Siswa</h3>
      </div>
      <div class="card-body">
        @can('isAdmin')
          <a href="{{ route('siswa.index') }}"
             class="mb-2">Kembali</a>
        @endcan
        <div class="row ms-2">
          <h4 class="col-4">Nama</h4>
          <h4 class="col-8">: {{ $siswa->nama }}</h4>
        </div>
        <div class="row ms-2">
          <h4 class="col-4">NIS</h4>
          <h4 class="col-8">: {{ $siswa->nis }}</h4>
        </div>
        <div class="row ms-2">
          <h4 class="col-4">Tanggal Lahir</h4>
          <h4 class="col-8">: {{ $siswa->tgl_lahir }}</h4>
        </div>
      </div>
    </div>
  </div>
@endsection
