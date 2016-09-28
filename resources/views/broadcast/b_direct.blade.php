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
                        @endif

                        <div class="box box-danger">
                            <div class="box-header">
                                <div class="box-title">
                                    Pesan Langsung
                                </div>
                            </div>
                            <div class="box-body">
                                <form method="post" action="{{url('/broadcast/direct')}}">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>Pesan</label>
                                        <textarea class="form-control" rows="3" maxlength="120" name="pesan" required>{{old('pesan')}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor Tujuan</label>
                                        <input class="form-control" type="text" name="tujuan" required>
                                    </div>

                                    <button type="submit" class="btn btn-danger btn-block">Kirim</button>
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