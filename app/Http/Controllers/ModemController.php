<?php

namespace App\Http\Controllers;

use App\Modem;
use Illuminate\Http\Request;

use App\Http\Requests;

class ModemController extends Controller
{
    public function index(){

        $modem = Modem::first();

        if ($modem->identify() == "Error opening device, it doesn't exist."){
            return "Configuration Error";
        }else{
            return "Configuration Success";
        }

//        return view('modem',compact('modem'));
    }

    public function directory(){

    }
}

