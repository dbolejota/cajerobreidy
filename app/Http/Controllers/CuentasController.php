<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cuentas; // Reemplaza 'TuModelo' con el nombre de tu modelo correspondiente

class CuentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return cuentas::all();
    }

    // Resto de los métodos del controlador se mantienen igual
    // ...
}
