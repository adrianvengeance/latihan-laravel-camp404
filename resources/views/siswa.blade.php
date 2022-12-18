@extends('template')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col">
        <h3>Data Siswa</h3>
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th scope="col">Nama</th>
              <th scope="col">NIS</th>
              <th scope="col">Tanggal Lahir</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Andi Saputra</th>
              <td>101</td>
              <td>2003-12-22</td>
            </tr>
            <tr>
              <th scope="row">Budi Cahya</th>
              <td>102</td>
              <td>2004-1-30</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
