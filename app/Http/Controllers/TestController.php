<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function wellcome(){
        return "Hola, soy la pagina de bienvenida";
    }

    public function guardar(){
        return "hola soy una pagina para guardar datos";
    }
}
