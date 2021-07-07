<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class validarController extends Controller
{
    public function validar_dia(){
        $this->middleware('Lunes');
    }
}
