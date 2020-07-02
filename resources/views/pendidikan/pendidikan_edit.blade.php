@extends('layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-body">
 
                @if(Session::has('sukses'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                    {{ Session::get('sukses') }}
                </div>
                @endif
 
                @if(Session::has('gagal'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i> Gagal!</h4>
                    {{ Session::get('gagal') }}
                </div>
                @endif
 
                <form role="form" method="post" action="{{ url('/admin/manage-pendidikan/' .$dt->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    <div class="box-body">
                        <div class="form-group">
                        <label for="exampleInputEmail1">Nama Sekolah/Universitas</label>
                            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="" value="{{ $dt->nama }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Jurusan</label>
                            <input type="text" name="jurusan" class="form-control" id="exampleInputPassword1" placeholder="" value="{{ $dt->jurusan }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Dari</label>
                            <input type="text" name="dari" class="form-control datepicker" id="exampleInputFile" autocomplete="off" value="{{ $dt->dari }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Sampai (Kosongkan jika sampai sekarang)</label>
                            <input type="text" name="sampai" class="form-control datepicker" id="exampleInputFile" autocomplete="off" value="{{ $dt->sampai }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" rows="10">{{ $dt->deskripsi }}</textarea>
                        </div>
                    </div>
                    <!-- /.box-body -->
 
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
 
            </div>
        </div>
    </div>
</div>
 
@endsection