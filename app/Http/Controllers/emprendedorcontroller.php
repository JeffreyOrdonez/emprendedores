<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class emprendedorcontroller extends Controller
{
    public function index(){

        return view('emprendedores');
    }
}
