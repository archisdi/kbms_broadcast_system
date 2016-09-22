@extends('layouts.app')

@section('title')
    Home
@endsection


@section('content')
    <section class="content">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3">
                <div class="box box-danger">
                    <div class="box-body box-profile">
                        <h3 class="profile-username text-center">{{$pengurus['Nama_Lengkap']}}</h3>

                        <p class="text-muted text-center">{{$pengurus['Divisi']}}</p>

                        <ul class="list-group list-group-unbordered">

                            <li class="list-group-item">
                                <b>Email</b> <span class="pull-right text-muted">{{$pengurus['Email']}}</span>
                            </li>
                            <li class="list-group-item">
                                <b>Telefon</b> <span class="pull-right text-muted">
                                    @if(!empty($pengurus->Nomor_HP))
                                        0{{$pengurus->Nomor_HP}}
                                    @else
                                        -
                                    @endif
                                </span>
                            </li>
                            <li class="list-group-item">
                                <b>Email</b> <span class="pull-right text-muted">{{$pengurus['Email']}}</span>
                            </li>
                            <li class="list-group-item">
                                <b>ID Line</b> <span class="pull-right text-muted">{{$pengurus['ID_Line']}}</span>
                            </li>
                            <li class="list-group-item">
                                <b>Tanggal Lahir</b>
                                @if(empty($pengurus['Tanggal_Lahir']))
                                    <span class="pull-right text-muted">-</span>
                                @else
                                    <span class="pull-right text-muted">{{$pengurus['Tanggal_Lahir']}}</span>
                                @endif

                            </li>
                        </ul>
                    </div>
                    <!-- /.box-body -->
                </div>
                <a href="{{URL::previous()}}" class="btn btn-default">Kembali</a>

            </div>


        </div>
    </section>
@endsection