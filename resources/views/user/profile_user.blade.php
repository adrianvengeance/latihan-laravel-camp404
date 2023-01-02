@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h3>Ubah Data User</h3>
      </div>
      <div class="card-body">
        <a href="{{ route('user.index') }}">Kembali</a>
        <form action="{{ route('user.update', $user->id) }}"
              method="POST"
              class="mt-2">
          @csrf
          @method('PUT')
          <ul class="list-group mb-2">
            Nama <input type="text"
                   name="name"
                   value="{{ $user->name }}"
                   required>
            Role <select name="role">
              <option value="siswa"
                      {{ $user->role == 'siswa' ? 'selected' : '' }}>Siswa</option>
              <option value="admin"
                      {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
            </select>
            Email <input type="text"
                   name="email"
                   value="{{ $user->email }}"
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
