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
                    <a href="{{ route('student.create') }}" class="btn btn-success btn-sm modal-show" title="Tambah Data Siswa">
                        Tambah Siswa
                    </a>
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
@include('layout._modal')
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

        $('body').on('click', '.modal-show', function (event) {
            event.preventDefault();

            var me = $(this),
                url = me.attr('href'),
                title = me.attr('title');

            $('#modal-title').text(title);
            $('#modal-btn-save').text('Tambahkan');

            $.ajax({
                url: url,
                dataType: 'html',
                success: function (response) {
                    $('#modal-body').html(response);
                }
            });

            $('#modal').modal('show');
        });

        $('#modal-btn-save').click(function (event) {
            event.preventDefault();

            var form = $('#modal-body form'),
                url = form.attr('action'),
                method = $('input[name=_method]').val() == undefined ? 'POST' : 'PUT';

            form.find('.help-block').remove();
            form.find('.form-group').removeClass('has-error');

            $.ajax({
                url : url,
                method: method,
                data : form.serialize(),
                success: function (response) {
                    form.trigger('reset');
                    $('#modal').modal('hide');
                    $('#datatables').DataTable().ajax.reload();

                    swal({
                        type : 'success',
                        title : 'Success!',
                        text : 'Data has been saved!'
                    });
                },
                error : function (xhr) {
                    var res = xhr.responseJSON;
                    if ($.isEmptyObject(res) == false) {
                        $.each(res.errors, function (key, value) {
                            $('#' + key)
                                .closest('.form-group')
                                // .addClass('has-danger')
                                .append('<div class="invalid-feedback">' + value + '</div>');
                        });
                    }
                }
            })
        });

    </script>
@endpush
