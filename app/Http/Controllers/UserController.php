<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth'); 
        //es una forma de proteger el controlador, por lo general se usa en las rutas
        //usar cualquiera de los dos, pero nunca los dos
    }
}
