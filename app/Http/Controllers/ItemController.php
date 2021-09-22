<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    //
    public function cari(){
        return view('cari');
    }

    public function nemu(){
        return view('nemu');
    }
}
