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
                        Mailbox
                        <small>13 new messages</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Mailbox</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">

                        <div class="col">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Messages</span>
                                        <span class="info-box-number">1,410</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="box box-danger">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Inbox</h3>

                                    <div class="box-tools pull-right">
                                        <div class="has-feedback">
                                            <input type="text" class="form-control input-sm" placeholder="Search Mail">
                                            <span class="glyphicon glyphicon-search form-control-feedback"></span>
                                        </div>
                                    </div>
                                    <!-- /.box-tools -->
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <div class="mailbox-controls">
                                        <!-- Check all button -->
                                        <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
                                        </button>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                                        </div>
                                        <!-- /.btn-group -->
                                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                                        <div class="pull-right">
                                            1-50/200
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                                            </div>
                                            <!-- /.btn-group -->
                                        </div>
                                        <!-- /.pull-right -->
                                    </div>
                                    <div class="table-responsive mailbox-messages">
                                        <table class="table table-hover table-striped">
                                            <tbody>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                                                <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                                <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                                                </td>
                                                <td class="mailbox-attachment"></td>
                                                <td class="mailbox-date">5 mins ago</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
                                                <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                                <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                                                </td>
                                                <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                                                <td class="mailbox-date">28 mins ago</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
                                                <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                                <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                                                </td>
                                                <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                                                <td class="mailbox-date">11 hours ago</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                                                <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                                <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                                                </td>
                                                <td class="mailbox-attachment"></td>
                                                <td class="mailbox-date">15 hours ago</td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                                                <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                                <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                                                </td>
                                                <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                                                <td class="mailbox-date">Yesterday</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <!-- /.table -->
                                    </div>
                                    <!-- /.mail-box-messages -->
                                </div>
                            </div>
                            <!-- /. box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </section>

            </div>
        </div>
    </section>
@endsection