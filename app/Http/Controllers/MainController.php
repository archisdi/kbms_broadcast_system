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
            "inbox_count" => DB::table('inbox')->count(),
            "outbox_count" => DB::table('outbox')->count(),
            "inbox" => DB::table('inbox')->orderBy('ReceivingDateTime','desc')->paginate(10)
        ];

        return view('home',compact('data'));
    }

    public function broadcast(){
        return view('broadcast');
    }
}
