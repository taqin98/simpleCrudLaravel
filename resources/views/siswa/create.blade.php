@extends('layouts.app')

@section('tittle', 'Home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/') }}">
                        <div class="row">
                            <div class="col-md-3">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nm" placeholder="Nama Lengkap Siswa">
                            </div>

                            <div class="col-md-3">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alm" placeholder="Alamat Lengkap Siswa">
                            </div>

                            <div class="col-md-3">
                            <label>&nbsp;</label><br>
                            <input type="submit" value="Create" class="btn btn-primary">
                            <input type="reset" value="Reset" class="btn btn-danger">
                            {{ csrf_field() }}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection