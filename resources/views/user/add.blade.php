@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h3>Tambah User</h3>
      </div>
      <div class="card-body">
        <a href="{{ route('user.index') }}">Kembali</a>
        <form action="{{ route('user.store') }}"
              method="POST"
              class="mt-2">
          @csrf
          @method('POST')
          <ul class="list-group mb-2">
            Nama <input type="text"
                   name="name"
                   required>
            Role <select name="role"
                    required>
              <option disabled
                      selected
                      hidden>Pilih role</option>
              <option value="siswa">Siswa</option>
              <option value="admin">Admin</option>
            </select>
            Email <input type="text"
                   name="email"
                   required>
            Password <input type="password"
                   name="password"
                   required>
          </ul>
          <input type="submit"
                 value="Tambah User"
                 class="btn btn-success">
        </form>
      </div>
    </div>
  </div>
@endsection
