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
                                    Anggota
                                </div>
                            </div>
                            <div class="box-body">
                                <form method="post" action="{{url('/broadcast/anggota')}}">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>Pesan</label>
                                        <textarea class="form-control" name="pesan" rows="3" maxlength="120" required>{{old('pesan')}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Angkatan</label>
                                        <select class="form-control" name="angkatan" required>
                                            <option value="all" selected>Semua</option>
                                            <option value="2008">2008</option>
                                            <option value="2009">2009</option>
                                            <option value="2010">2010</option>
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                        </select>
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