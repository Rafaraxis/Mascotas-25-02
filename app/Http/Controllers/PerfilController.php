<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    //
    public function edit() {
        $argumentos = array();
        return view('perfil.edit');
    }
}
