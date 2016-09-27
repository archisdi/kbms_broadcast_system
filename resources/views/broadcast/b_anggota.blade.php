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

                        <div class="box box-danger">
                            <div class="box-header">
                                <div class="box-title">
                                    Anggota
                                </div>
                            </div>
                            <div class="box-body">
                                <form method="post" action="{{url('/broadcast')}}">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>Pesan</label>
                                        <textarea class="form-control" rows="3" maxlength="120">[KBMS-NOREPLY]</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Angkatan</label>
                                        <select class="form-control">
                                            <option>Semua</option>
                                            <option>2009</option>
                                            <option>2010</option>
                                            <option>2011</option>
                                            <option>2012</option>
                                            <option>2013</option>
                                            <option>2014</option>
                                            <option>2015</option>
                                            <option>2016</option>
                                            <option>2017</option>
                                        </select>
                                    </div>
                                    
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