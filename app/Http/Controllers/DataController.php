<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function form(){
        return view('form');
    }


    public function proses(Request $request){
        $nama = $request -> input('nama');
        $alamat = $request -> input('alamat');

        return view('hasil', compact('nama','alamat'));
    }
}