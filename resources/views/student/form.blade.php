{!! Form::model($model, [
    'route' => 'student.store',
    'method' => 'POST',
]) !!}

    <div class="form-group">
        <label class="control-label">NISN</label>
        {!! Form::text('nisn', null, ['class' => 'form-control', 'id' => 'nisn']) !!}
    </div>

    <div class="form-group">
        <label class="control-label">Nama</label>
        {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) !!}
    </div>

    <div class="form-group">
        <label class="control-label">Tanggal Lahir</label>
        {!! Form::date('birth_date', null, ['class' => 'form-control', 'id' => 'birth_date'], \Carbon\Carbon::now()) !!}
    </div>

    <div class="form-group">
        <label class="control-label">Jenis Kelamin</label>
        {!! Form::select('gender', ['L' => 'Laki-Laki', 'P' => 'Perempuan'], null, ['class' => 'form-control', 'id'=> 'gender', 'placeholder' => 'Pilih Jenis Kelamin']) !!}
    </div>

    <div class="form-group">
        <label class="control-label">Agama</label>
        {!! Form::select('religion', ['Islam' => 'Islam', 'Kristen' => 'Kristen', 'Katolik' => 'Katolik', 'Hindu' => 'Hindu', 'Buddha' => 'Buddha'],
           null, ['class' => 'form-control', 'id'=> 'religion', 'placeholder' => 'Pilih Agama ']) !!}
    </div>

    <div class="form-group">
        <label for="" class="control-label">Alamat</label>
        {!! Form::textarea('address', null, ['class' => 'form-control', 'id' => 'address', 'rows' => 2, 'cols' => 40 ]) !!}
    </div>

{!! Form::close() !!}
