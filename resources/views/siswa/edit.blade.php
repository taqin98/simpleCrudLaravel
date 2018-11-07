@extends('layouts.app')

@section('tittle', 'Edit')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url("/$data->id") }}">
                        <div class="row">
                            <div class="col-md-3">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nm" value="{{ $data->nama }}">
                            </div>

                            <div class="col-md-3">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alm" value="{{ $data->alamat }}">
                            </div>

                            <div class="col-md-3">
                            <label>&nbsp;</label><br>
                            <input type="submit" value="Update" class="btn btn-primary">
                            <input type="hidden" name="_method" value="PUT">
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