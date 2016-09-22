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
                        <h3 class="profile-username text-center">{{$anggota['Nama']}}</h3>

                        <p class="text-muted text-center">{{$anggota['Fakultas']}}</p>

                        <ul class="list-group list-group-unbordered">

                            <li class="list-group-item">
                                <b>Nim</b> <span class="pull-right text-muted">{{$anggota['NIM']}}</span>
                            </li>
                            <li class="list-group-item">
                                <b>Jurusan</b> <span class="pull-right text-muted">{{$anggota['Jurusan']}}</span>
                            </li>
                            <li class="list-group-item">
                                <b>Angkatan</b> <span class="pull-right text-muted">{{$anggota['Angkatan']}}</span>
                            </li>
                            <li class="list-group-item">
                                <b>Telefon</b> <span class="pull-right text-muted">
                                    @if(!empty($anggota->No_HP))
                                        0{{$anggota->No_HP}}
                                    @else
                                        -
                                    @endif
                                </span>
                            </li>
                            <li class="list-group-item">
                                <b>Email</b> <span class="pull-right text-muted">{{$anggota['Email']}}</span>
                            </li>
                            <li class="list-group-item">
                                <b>ID Line</b> <span class="pull-right text-muted">{{$anggota['ID_Line']}}</span>
                            </li>
                            <li class="list-group-item">
                                <b>Facebook</b> <span class="pull-right text-muted">{{$anggota['Facebook']}}</span>
                            </li>
                            <li class="list-group-item">
                                <b>Tempat Lahir</b> <span
                                    class="pull-right text-muted">{{$anggota['Tempat_Lahir']}}</span>
                            </li>
                            <li class="list-group-item">
                                <b>Tanggal Lahir</b>
                                @if(empty($anggota['Tanggal_Lahir']))
                                    <span class="pull-right text-muted">-</span>
                                @else
                                    <span class="pull-right text-muted">{{$anggota['Tanggal_Lahir']}}</span>
                                @endif

                            </li>
                            <div class="col-lg-12 text-center">
                                <br>
                                <strong>Alamat Kota Asal</strong>
                                <p class="text-muted">
                                    {{$anggota['Alamat_Kota_Asal']}}
                                </p>
                                <hr>

                                <strong>Alamat Bandung</strong>
                                <p class="text-muted">
                                    {{$anggota['Alamat_Bandung']}}
                                </p>
                                <hr>
                            </div>

                        </ul>
                    </div>
                    <!-- /.box-body -->
                </div>
                <a href="{{URL::previous()}}" class="btn btn-default">Kembali</a>

            </div>


        </div>
    </section>
@endsection