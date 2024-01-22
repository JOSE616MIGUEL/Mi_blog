<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class UsuarioController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }

   
    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //
    }

   
    public function show(string $id)
    {
        //
    }

 
    public function edit(string $id)
    {
        
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }

   /**
    * The above code defines two functions in PHP for handling user configuration settings, one for
    * retrieving the settings and one for updating them.
    * 
    * @param string id The "id" parameter is a string that represents the unique identifier of a user.
    * It is used to find and retrieve the user from the database in the "configuration" and
    * "updateconfiguration" methods.
    * 
    * @return The first function is returning a view called 'admin.usuario.settings' with the variable
    * 'usuario' passed to it.
    */
    public function configuration(string $id)
    {
        $usuario  = User::find($id);
        return view('admin.usuario.settings', compact('usuario'));
    }

    public function updateconfiguration(Request $request, string $id)
    {
        $usuario  = User::find($id);
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        if($request->hasFile('imagen')){
            $imagen = $request->file('imagen');
            $url = 'img/usuario/';
            $nombreimagen = time() . '-' . $imagen->getClientOriginalName();
            $uploadSuccess = $request->file('imagen')->move($url,$nombreimagen);
            $usuario->imagen = $url. $nombreimagen;
        }
        $usuario->name = $request->post('name');
        $usuario->email = $request->post('email');
        $usuario->password = bcrypt($request->post('password'));
        $usuario->save();
       
        return redirect()->back()->with("success", "Actualizado con exito!");
    }
}
