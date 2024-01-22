<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\Contacto;

class EmpresaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $empresa = Empresa::all();
        $contacto = Contacto::all();
        return view('admin.empresa.index', compact('empresa','contacto'));
    }

  
    public function create()
    {
        
    }

 
 /**
  * This PHP code defines functions for storing, showing, editing, updating, and deleting data for a
  * company in a database.
  * 
  * @param Request request The  parameter is an instance of the Request class, which represents
  * an HTTP request. It contains information about the request such as the request method, headers, and
  * input data.
  * 
  * @return In the `store` method, a redirect back to the previous page is being returned with a
  * success message.
  */
    public function store(Request $request)
    {
        $empresa = new Empresa();
        $request->validate([
            'rut' => 'required',
            'nombre' => 'required',
            'ubicacion' => 'required',
            'fono' => 'required',
            'correo' => 'required',
            'razon_social' => 'required'
        ]);
        $empresa->rut = $request->post('rut');
        $empresa->nombre = $request->post('nombre');
        $empresa->ubicacion = $request->post('ubicacion');
        $empresa->fono = $request->post('fono');
        $empresa->correo = $request->post('correo');
        $empresa->razon_social = $request->post('razon_social');
        $empresa->save();
       
        return redirect()->back()->with("success", "Agregado con exito!");
    }

  
    public function show(string $id)
    {
        $empresa  = Empresa::find($id);
        return view('admin.empresa.delete', compact('empresa'));
   
    }


    public function edit(string $id)
    {
        $empresa  = Empresa::find($id);
        return view('admin.empresa.update', compact('empresa'));
    }

  
    public function update(Request $request, string $id)
    {
        $empresa = Empresa::find($id);
        $request->validate([
            'rut' => 'required',
            'nombre' => 'required',
            'ubicacion' => 'required',
            'fono' => 'required',
            'correo' => 'required',
            'razon_social' => 'required'
        ]);
        $empresa->rut = $request->post('rut');
        $empresa->nombre = $request->post('nombre');
        $empresa->ubicacion = $request->post('ubicacion');
        $empresa->fono = $request->post('fono');
        $empresa->correo = $request->post('correo');
        $empresa->razon_social = $request->post('razon_social');
        $empresa->save();
       
        return redirect()->route("Empresa.index")->with("success", "Actualizado con exito!");
    }

   
    public function destroy(string $id)
    {
        $empresa = Empresa::find($id);
        $empresa->delete();
        return redirect()->route("Empresa.index")->with("success", "Eliminado con exito!");
    }
}