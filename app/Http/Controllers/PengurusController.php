<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp;
use App\Http\Requests;

class PengurusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request,$id)
    {
        $client = new GuzzleHttp\Client();

        if ($search = $request->input('search')) {

            $res = $client->get(env('KBMS_SERVER') . 'pengurus/search/'.$search, ['query' => ['page' => $id, 'apikey' => env('KBMS_API')]]);

        } else {
            $res = $client->get(env('KBMS_SERVER') . 'pengurus', ['query' => ['page' => $id, 'apikey' => env('KBMS_API')]]);
        }



        $data = json_decode($res->getBody(), true);

        return view('pengurus.pengurus_index', compact('data'));
    }

    public function show($id)
    {
        $client = new GuzzleHttp\Client();
        $res = $client->get(env('KBMS_SERVER') . 'pengurus/' . $id, ['query' => ['apikey' => env('KBMS_API')]]);

        $pengurus = json_decode($res->getBody(), true);

        return view('pengurus.pengurus_show', compact('pengurus'));
    }
}
