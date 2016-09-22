@extends('layouts.app')

@section('title')
    Anggota
@endsection

@section('h_script')
@endsection

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Pengurus KBMS Periode 2016/2017</h3>
                        <div class="box-tools">
                            <form method="get" action="{{url('pengurus/page/1')}}" class="input-group input-group-sm"
                                  style="width: 150px;">
                                <input type="text" name="search" class="form-control pull-right" placeholder="Cari">
                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="anggota" class="table table-responsive">
                                <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Divisi</th>
                                    <th>No HP</th>
                                    <th>ID Line</th>
                                    <th>Tanggal lahir</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data['data'] as $pengurus)
                                    <tr class="text-black">
                                        <td><a href="{{url('pengurus/'.$pengurus['id'])}}">{{$pengurus['Nama_Lengkap']}}</a></td>
                                        <td>{{$pengurus['Divisi']}}</td>
                                        <td>{{$pengurus['Nomor_HP']}}</td>
                                        <td>{{$pengurus['ID_Line']}}</td>
                                        @if(empty($pengurus['Tanggal_Lahir']))
                                            <td>-</td>
                                        @else
                                            <td>{{$pengurus['Tanggal_Lahir']}}</td>
                                        @endif

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            @if(isset($_GET['search']))
                                @for ($i = 1; $i <= $data['last_page']; $i++)
                                    <li class="@if($data['current_page'] == $i) active @endif"><a href="{{url('/pengurus/page/'.$i.'?search='.$_GET['search'])}}">{{$i}}</a></li>
                                @endfor
                            @else
                                @for ($i = 1; $i <= $data['last_page']; $i++)
                                    <li class="@if($data['current_page'] == $i) active @endif"><a href="{{url('/pengurus/page/'.$i)}}">{{$i}}</a></li>
                                @endfor
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
