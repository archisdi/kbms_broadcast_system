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
                        <span class=" fa fa-laptop text-yellow"></span> Modem
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="well well-sm">{{$modem->path}}</div>
                        </div>
                        <div class="col-lg-4">
                            <a href="{{url('modem/dir')}}" class="btn btn-default">Change Directory</a>
                        </div>
                    </div>
                    <div>

                        <div>

                        </div>

                    </div>
                    <!-- /.col -->
            </div>
            <!-- /.row -->
    </section>
@endsection