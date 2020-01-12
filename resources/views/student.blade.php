@extends('layout.app')
@section('header')
    Data Siswa
@endsection
@section('content')
<div class="col-12">
    <div class="card card-primary card-outline ">
        <div class="card-header">
            <div class="row justify-content-between">
                <h5 class=""> List Data Siswa</h5>
                <button type="button" class="btn btn-success btn-sm">Tambah Siswa</button>
          </div>
        </div>

      <!-- /.card-header -->
      <div class="card-body table-responsive p-3">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>NISN</th>
              <th>Nama Lenkap</th>
              <th>Tanggal Lahir</th>
              <th>Jenis Kelamin</th>
              <th>Agama</th>
              <th>Alamat</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>183</td>
              <td>John Doe</td>
              <td>11-7-2014</td>
              <td><span class="tag tag-success">Approved</span></td>
              <td>Bacon ipsum dolor sit amet salami </td>
              <td>venison chicken flank fatback doner.</td>
              <td>
                  <button class="btn btn-warning btn-sm">Edit</button>
                  <button class="btn btn-danger btn-sm">Hapus</button>
              </td>
            </tr>
            <tr>
              <td>219</td>
              <td>Alexander Pierce</td>
              <td>11-7-2014</td>
              <td><span class="tag tag-warning">Pending</span></td>
              <td>Bacon ipsum dolor sit amet salami </td>
              <td>venison chicken flank fatback doner.</td>
              <td>
                <button class="btn btn-warning btn-sm">Edit</button>
                <button class="btn btn-danger btn-sm">Hapus</button>
            </td>
            </tr>
            <tr>
              <td>657</td>
              <td>Bob Doe</td>
              <td>11-7-2014</td>
              <td><span class="tag tag-primary">Approved</span></td>
              <td>Bacon ipsum dolor sit amet salami </td>
              <td>venison chicken flank fatback doner.</td>
              <td>
                <button class="btn btn-warning btn-sm">Edit</button>
                <button class="btn btn-danger btn-sm">Hapus</button>
            </td>
            </tr>
            <tr>
              <td>175</td>
              <td>Mike Doe</td>
              <td>11-7-2014</td>
              <td><span class="tag tag-danger">Denied</span></td>
              <td>Bacon ipsum dolor sit amet salami</td>
              <td>venison chicken flank fatback doner.</td>
              <td>
                <button class="btn btn-warning btn-sm">Edit</button>
                <button class="btn btn-danger btn-sm">Hapus</button>
            </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
@endsection
