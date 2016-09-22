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
                        <h3 class="box-title">Anggota KBMS Telkom University</h3>
                        <div class="box-tools">
                            <form method="get" action="{{url('anggota/page/1')}}" class="input-group input-group-sm"
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
                                    <th>Nim</th>
                                    <th>Jurusan</th>
                                    <th>Angkatan</th>
                                    <th>Tanggal lahir</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data['data'] as $anggota)
                                    <tr class="text-black">
                                        <td><a href="{{url('anggota/'.$anggota['id'])}}">{{$anggota['Nama']}}</a></td>
                                        <td>{{$anggota['NIM']}}</td>
                                        <td>{{$anggota['Jurusan']}}</td>
                                        <td>{{$anggota['Angkatan']}}</td>
                                        @if(empty($anggota['Tanggal_Lahir']))
                                            <td>-</td>
                                        @else
                                            <td>{{$anggota['Tanggal_Lahir']}}</td>
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
                                    <li class="@if($data['current_page'] == $i) active @endif"><a href="{{url('/anggota/page/'.$i.'?search='.$_GET['search'])}}">{{$i}}</a></li>
                                @endfor
                            @else
                                @for ($i = 1; $i <= $data['last_page']; $i++)
                                    <li class="@if($data['current_page'] == $i) active @endif"><a href="{{url('/anggota/page/'.$i)}}">{{$i}}</a></li>
                                @endfor
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
