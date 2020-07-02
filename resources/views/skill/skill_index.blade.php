@extends('layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-8 col-md-offset-2">
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
               
                <form role="form" method="post" action="{{ url('admin/manage-skill/{id}') }}">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    <div class="box-body">
                        <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                            <textarea class="form-control summernote" name="description" rows="10">{{ $skill->description }}</textarea>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                        <label for="exampleInputEmail1">Skills / Pisah dengan Enter</label>
                            <textarea class="form-control " name="skill" rows="10">{{ $skill->skill }}</textarea>
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