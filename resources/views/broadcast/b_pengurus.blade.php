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
                            <div class="box-body">
                                <form method="post" action="{{url('/broadcast')}}">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>Pesan</label>
                                        <textarea class="form-control" rows="3" maxlength="120">[KBMS-NOREPLY]</textarea>
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