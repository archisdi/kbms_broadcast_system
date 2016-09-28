<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use GuzzleHttp;
use App\Modem;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class BroadcastController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function anggota()
    {
        return view('broadcast.b_anggota');
    }

    public function pengurus()
    {
        return view('broadcast.b_pengurus');
    }

    public function direct()
    {
        return view('broadcast.b_direct');
    }

    public function excel()
    {
        return view('broadcast.b_excel');
    }

    public function anggotaSend(Request $request)
    {
        $message = $request->pesan;
        $angkatan = $request->angkatan;
        $ROOT = Modem::first()->path;
        $PATH_SMSD_INJECT = $ROOT . "gammu-smsd-inject";
        $CONFIG = $ROOT . "smsdrc";

        $client = new GuzzleHttp\Client();
        if ($angkatan == 'all') {
            $res = $client->get(env('KBMS_SERVER') . 'anggota/kontak', ['query' => ['apikey' => env('KBMS_API')]]);
        } else {
            $res = $client->get(env('KBMS_SERVER') . 'anggota/kontak/' . $angkatan, ['query' => ['apikey' => env('KBMS_API')]]);
        }

        $kontak = json_decode($res->getBody(), true);

        foreach ($kontak as $data) {
            if ($data != null) {
                $destination = "0" . $data;
                $command = ($PATH_SMSD_INJECT . ' -c ' . $CONFIG . ' TEXT ' . $destination . ' -text ' . '"' . $message . '"');
                exec($command);
            }
        }

        \Session::flash('flash_message', 'Pesan Berhasil Ter-broadcast');
        return redirect('broadcast\anggota');
    }

    public function pengurusSend(Request $request){
        $message = $request->pesan;
        $ROOT = Modem::first()->path;
        $PATH_SMSD_INJECT = $ROOT . "gammu-smsd-inject";
        $CONFIG = $ROOT . "smsdrc";

        $client = new GuzzleHttp\Client();
        $res = $client->get(env('KBMS_SERVER') . 'pengurus/kontak', ['query' => ['apikey' => env('KBMS_API')]]);

        $kontak = json_decode($res->getBody(), true);

        foreach ($kontak as $data) {
            if ($data != null) {
                $destination = "0" . $data;
                $command = ($PATH_SMSD_INJECT . ' -c ' . $CONFIG . ' TEXT ' . $destination . ' -text ' . '"' . $message . '"');
                exec($command);
            }
        }

        \Session::flash('flash_message', 'Pesan Berhasil Ter-broadcast');
        return redirect('broadcast\pengurus');
    }

    public function directSend(Request $request){
        $message = $request->pesan;
        $destination = $request->tujuan;
        $ROOT = Modem::first()->path;
        $PATH_SMSD_INJECT = $ROOT . "gammu-smsd-inject";
        $CONFIG = $ROOT . "smsdrc";

        exec($PATH_SMSD_INJECT . ' -c ' . $CONFIG . ' TEXT ' . $destination . ' -text ' . '"' . $message . '"');

        \Session::flash('flash_message', 'Pesan Berhasil Ter-broadcast');
        return redirect('broadcast\direct');
    }

    public function excelSend(Request $request)
    {

        $message = $request->pesan;
        $ROOT = Modem::first()->path;
        $PATH_SMSD_INJECT = $ROOT . "gammu-smsd-inject";
        $CONFIG = $ROOT . "smsdrc";

        if ($request->hasFile('excel')) {
            $excel = $request->file('excel');
        } else {
            \Session::flash('error_message', 'File gagal di-upload');
            return redirect('broadcast\excel')->withInput();
        }

        if ($excel->extension() != "xlsx") {
            \Session::flash('error_message', 'File harus berekstensi .xlxs');
            return redirect('broadcast\excel')->withInput();
        }

        $res = Excel::load($excel, function ($reader) {
        })->get();

        foreach ($res as $data) {
            $destination = "0" . $data['nomor'];
            $command = ($PATH_SMSD_INJECT . ' -c ' . $CONFIG . ' TEXT ' . $destination . ' -text ' . '"' . $message . '"');

            exec($command);
        }

        \Session::flash('flash_message', 'Pesan Berhasil Ter-broadcast');
        return redirect('broadcast\excel');
    }
}
