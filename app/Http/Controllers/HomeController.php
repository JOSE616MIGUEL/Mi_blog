<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\Cliente;
use App\Models\Proyecto;
use App\Models\Venta;
use App\Models\User;


class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $proyecto = Proyecto::all();
        $empresa = Empresa::all();
        $cliente = Cliente::all();
        $user = User::all();
        $puntos = [];
        $venta = Venta::all(); 
        foreach ($venta as $sale){
            // Obtén el nombre del proyecto en lugar del proyecto_id
            Proyecto::find($sale['proyecto_id']);
            $puntos[] = ['y' => floatval($sale['precio'])];
          
        }
        
        return view('home', compact('cliente','empresa','proyecto','venta','user'),["data" => json_encode($puntos)]);
    }
}
