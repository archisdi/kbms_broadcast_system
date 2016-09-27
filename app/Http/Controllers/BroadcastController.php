<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class BroadcastController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function anggota(){
        return view('broadcast.b_anggota');
    }

    public function pengurus(){
        return view('broadcast.b_pengurus');
    }

    public function direct(){
        return view('broadcast.b_direct');
    }

    public function excel(){
        return view('broadcast.b_excel');
    }

    public function excelSend(Request $request){

        $message =  $request->pesan;
        $ROOT = 'D:/SMS_GATEWAY/gammu/bin/';
        $PATH_SMSD_INJECT = $ROOT . "gammu-smsd-inject";
        $CONFIG = $ROOT . "smsdrc";

        $res = Excel::load('excel\send.xlsx', function($reader) {

        })->get();

        foreach ($res as $data){
            $destination = "0" . $data['nomor'];
            $command = ($PATH_SMSD_INJECT . ' -c ' . $CONFIG . ' TEXT ' . $destination . ' -text ' . '"' . $message . '"');

            exec($command);
        }

        return 'broadcast selesai';
    }
}
