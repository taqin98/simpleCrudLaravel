@extends('layouts.app')

@section('tittle', 'Home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a href="{{ url('siswa/create') }}" class="btn btn-primary">Tambah</a>
                    <table class="table table-striped">
                        <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Almat</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php $no=0; ?>
                            @foreach($datas as $data)
                            <?php $no++; ?>
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>
                                    <a href="{{ url("/siswa/edit/$data->id") }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ url("/siswa/hapus/$data->id") }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection