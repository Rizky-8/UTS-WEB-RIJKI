@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Detail Mahasiswa</h4>
                </div>
                <div class="card-body">
                    <dl class="row">
                        <dt class="col-sm-4">Nama</dt>
                        <dd class="col-sm-8">{{ $student->nama }}</dd>

                        <dt class="col-sm-4">NIM</dt>
                        <dd class="col-sm-8">{{ $student->nim }}</dd>

                        <dt class="col-sm-4">Kelas</dt>
                        <dd class="col-sm-8">{{ $student->kelas }}</dd>

                        <dt class="col-sm-4">Tempat Lahir</dt>
                        <dd class="col-sm-8">{{ $student->tempat_lahir }}</dd>

                        <dt class="col-sm-4">Tanggal Lahir</dt>
                        <dd class="col-sm-8">{{ $student->tanggal_lahir }}</dd>
                    </dl>

                    <a href="{{ route('student.index') }}" class="btn btn-primary">Back to List</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
