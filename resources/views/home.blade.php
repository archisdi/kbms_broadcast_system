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
                        Dashboard
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">

                        <div class="col">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Inbox</span>
                                        <span class="info-box-number">{{$data['inbox_count']}}</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        </div>

                        <div class="col">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Outbox</span>
                                        <span class="info-box-number">{{$data['outbox_count']}}</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-danger">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Inbox</h3>
                                    <!-- /.box-tools -->
                                </div>
                                <div class="box-body">
                                    <div class="table-responsive mailbox-messages">
                                        <table class="table table-hover table-striped">
                                            <tbody>
                                            @foreach($data['inbox'] as $inbox)
                                                <tr>
                                                    <td class="mailbox-name">{{$inbox->SenderNumber}}</a></td>
                                                    <td class="mailbox-subject">{{$inbox->TextDecoded}}</td>
                                                    <td class="mailbox-date">{{$inbox->ReceivingDateTime}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <!-- /.table -->
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <span class="pull-right">
                                    {{$data['inbox']->render()}}
                                    </span>
                                </div>
                                <!-- /.mail-box-messages -->
                            </div>
                        </div>
                        <!-- /. box -->
                    </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection