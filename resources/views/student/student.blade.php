@extends('layout.app')

@section('header')
    Data Siswa
@endsection

@section('content')
<div class="col-12">
    <div class="card card-primary card-outline ">
        <div class="card-header">
            <div class="container">
                <div class="row justify-content-between">
                    <h5 class=""> List Data Siswa</h5>
                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-default">
                        Tambah Siswa
                    </button>
                </div>
            </div>
        </div>

        <!-- /.card-header -->
        <div class="card-body table-responsive p-3">
            <table class="table table-bordered text-center" id="student_table" style="font-size:14px">
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
            </table>
        </div>
    <!-- /.card-body -->
    </div>
<!-- /.card -->
</div>
@endsection

@push('script')
    <script>
        $('#student_table').DataTable({
            responsive  : true,
            processing  : true,
            serverSide  : true,
            ajax        : "{{ route('student.index') }}",
            columns      : [
                {data: 'nisn', name: 'nisn'},
                {data: 'name', name: 'name'},
                {data: 'birth_date', name: 'birth_date'},
                {data: 'gender', name: 'gender'},
                {data: 'religion', name: 'religion'},
                {data: 'address', name: 'address'},
                {data: 'action', name: 'action'},
            ],
        })
    </script>
@endpush
