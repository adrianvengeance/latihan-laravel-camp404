@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h3>Ubah Data Siswa</h3>
      </div>
      <div class="card-body">
        <a href="{{ route('siswa.index') }}"
           class="mb-2">Kembali</a>
        <form action="{{ route('siswa.update', $siswa->id) }}"
              method="POST">
          @csrf
          @method('PUT')
          <ul class="list-group mb-2">
            Nama <input type="text"
                   name="nama"
                   value="{{ $siswa->nama }}"
                   required>
            NIS <input type="text"
                   name="nis"
                   value="{{ $siswa->nis }}"
                   required>
            Tanggal Lahir <input type="date"
                   name="tgl_lahir"
                   value="{{ $siswa->tgl_lahir }}"
                   required>
          </ul>
          <input type="submit"
                 value="Ubah Data"
                 class="btn btn-success">
        </form>
      </div>
    </div>
  </div>
@endsection
