@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h3>Manajemen User</h3>
      </div>
      <div class="card-body">
        <a href="{{ route('user.create') }}">Tambah User</a>
        <table class="table table-bordered table-striped mt-2">
          <tr>
            <th>Nama</th>
            <th>Role</th>
            <th>Email</th>
            <th>AKSI</th>
          </tr>
          @foreach ($users as $s)
            <tr>
              <td>{{ $s->name }}</td>
              <td>{{ $s->role }}</td>
              <td>{{ $s->email }}</td>
              <td>
                <ul class="nav">
                  <a href="{{ route('user.edit', $s->id) }}"
                     class="btn btn-warning me-2">Edit</a>
                  <form action="{{ route('user.destroy', $s->id) }}"
                        method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            class="btn btn-danger">Delete</button>
                  </form>
                </ul>
              </td>
            </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
@endsection
