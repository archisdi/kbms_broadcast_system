@extends('layouts.app')

@section('title')
    Home
@endsection


@section('content')
    <section class="content">
        <div class="row">
            <div class="col-lg-12">

                <section class="content-header">
                    <h1>
                        Broadcast Pesan
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        @if(Session::has('flash_message'))
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">&times;</button>
                                <h4><i class="icon fa fa-check"></i> Pemberitahuan </h4>
                                {{ Session::get('flash_message') }}
                            </div>
                        @elseif(Session::has('error_message'))
                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">&times;</button>
                                <h4><i class="icon fa fa-warning"></i> Pemberitahuan </h4>
                                {{ Session::get('error_message') }}
                            </div>
                        @endif

                        <div class="box box-danger">
                            <div class="box-header">
                                <div class="box-title">
                                    <span class="fa fa-file-excel-o text-olive"> Excel</span>
                                </div>
                            </div>
                            <div class="box-body">
                                <form method="post" action="{{url('/broadcast/excel')}}" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>Pesan</label>
                                        <textarea class="form-control" rows="3" maxlength="120" name="pesan" required>{{old('pesan')}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>File</label>
                                        <input type="file" name="excel" required>
                                    </div>

                                    <button type="submit" class="btn btn-block btn-danger">Kirim</button>

                                </form>
                            </div>
                        </div>

                    </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection