<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calendariocontroller extends Controller
{
    public function index(){
        return view('calendario.index');

    }
}
