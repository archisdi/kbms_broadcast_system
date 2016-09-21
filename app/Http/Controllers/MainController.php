<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class MainController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $data = [
            "inbox" => DB::table('inbox')->get(),
            "outbox" => DB::table('outbox')->get()
        ];

        return view('home',compact('data'));
    }

    public function broadcast(){
        return view('broadcast');
    }
}
