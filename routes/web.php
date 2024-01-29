<?php
//Agregar esta clase para redireccionar 
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth; 
//modelos
use App\Models\Empresa;
use App\Models\Cliente;
use App\Models\Proyecto;
use App\Models\Contacto;
use App\Models\Tecnologia;
use App\Models\Educacion;
use App\Models\ExperienciaProfesional;

use Illuminate\Support\Facades\Route;

//controlador
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\EmpresaController;
use App\Http\Controllers\Admin\ClienteController;
use App\Http\Controllers\Admin\ProyectoController;
use App\Http\Controllers\Admin\ContactoController;
use App\Http\Controllers\ContactoControllerform;
use App\Http\Controllers\Admin\TecnologiaController;
use App\Http\Controllers\Admin\VentaController;
use App\Http\Controllers\Admin\UsuarioController;
use App\Http\Controllers\Admin\EducacionController;
use App\Http\Controllers\Admin\ExperienciaController;

//Agregar esta línea para redireccionar al momento de solo ingresar /Mi_blog
Route::get('/Mi_blog', function () {
    return redirect('/Mi_blog/public');
});



Route::get('/', function () {
    $experiencia = ExperienciaProfesional::all();
    $educacion = Educacion::all();
    $empresa = Empresa::all();
    $cliente = Cliente::all();
    $proyecto = Proyecto::where('estado','1')->get();
    $tecnologia = Tecnologia::all();
    return view('welcome', compact('tecnologia','proyecto','cliente','empresa','educacion','experiencia'));
})->name('Welcome');

Route::group(['namespace' => 'Auth', 'middleware' => 'web'], function () {
    // Rutas de recuperación de contraseña
    Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('password/reset/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('password/reset', [ForgotPasswordController::class, 'reset'])->name('password.update');
});

Route::get('descargar-archivo', [ContactoControllerform::class, 'descargarArchivo'])->name('Cv.pdf');


Auth::routes();



Route::post('store-contacto', [ContactoControllerform::class, 'store'])->name('Contacto.store');



Route::prefix('admin')->middleware('auth','isAdmin')->group(function () { 


Route::get('/home', [HomeController::class, 'index'])->name('home');

//Empresa

Route::get('empresa', [EmpresaController::class, 'index'])->name('Empresa.index');

Route::get('create-empresa', [EmpresaController::class, 'create'])->name('Empresa.create');

Route::post('store-empresa', [EmpresaController::class, 'store'])->name('Empresa.store');

Route::get('edit-empresa/{id}',[EmpresaController::class, 'edit'])->name('Empresa.edit');
    
Route::put('update-empresa/{id}',[EmpresaController::class, 'update'])->name('Empresa.update');
    
Route::get('show-empresa/{id}',[EmpresaController::class, 'show'])->name('Empresa.show');
    
Route::delete('destroy-empresa/{id}',[EmpresaController::class, 'destroy'])->name('Empresa.destroy');

//fin empresa

//Cliente

Route::get('cliente', [ClienteController::class, 'index'])->name('Cliente.index');

Route::get('create-cliente', [ClienteController::class, 'create'])->name('Cliente.create');

Route::post('store-cliente', [ClienteController::class, 'store'])->name('Cliente.store');

Route::get('edit-cliente/{id}',[ClienteController::class, 'edit'])->name('Cliente.edit');
    
Route::put('update-cliente/{id}',[ClienteController::class, 'update'])->name('Cliente.update');
    
Route::get('show-cliente/{id}',[ClienteController::class, 'show'])->name('Cliente.show');
    
Route::delete('destroy-cliente/{id}',[ClienteController::class, 'destroy'])->name('Cliente.destroy');

//fin cliente

//Proyecto

Route::get('proyecto', [ProyectoController::class, 'index'])->name('Proyecto.index');

Route::get('create-proyecto', [ProyectoController::class, 'create'])->name('Proyecto.create');

Route::post('store-proyecto', [ProyectoController::class, 'store'])->name('Proyecto.store');

Route::get('edit-proyecto/{id}',[ProyectoController::class, 'edit'])->name('Proyecto.edit');
    
Route::put('update-proyecto/{id}',[ProyectoController::class, 'update'])->name('Proyecto.update');
    
Route::get('show-proyecto/{id}',[ProyectoController::class, 'show'])->name('Proyecto.show');
    
Route::delete('destroy-proyecto/{id}',[ProyectoController::class, 'destroy'])->name('Proyecto.destroy');

//actualizar imagen
Route::put('edit-proyecto-imagen/{id}',[ProyectoController::class, 'storeimagen'])->name('Proyecto.edit.image');

//fin proyecto

//Contacto

Route::get('contacto', [ContactoController::class, 'index'])->name('Contacto.index');

Route::get('create-contacto', [ContactoController::class, 'create'])->name('Contacto.create');

Route::get('edit-contacto/{id}',[ContactoController::class, 'edit'])->name('Contacto.edit');
    
Route::put('update-contacto/{id}',[ContactoController::class, 'update'])->name('Contacto.update');
    
Route::get('show-contacto/{id}',[ContactoController::class, 'show'])->name('Contacto.show');
    
Route::delete('destroy-contacto/{id}',[ContactoController::class, 'destroy'])->name('Contacto.destroy');

//fin contacto

//Teclogía

Route::get('tecnologia', [TecnologiaController::class, 'index'])->name('Tecnologia.index');

Route::get('create-tecnologia', [TecnologiaController::class, 'create'])->name('Tecnologia.create');

Route::post('store-tecnologia', [TecnologiaController::class, 'store'])->name('Tecnologia.store');

Route::get('edit-tecnologia/{id}',[TecnologiaController::class, 'edit'])->name('Tecnologia.edit');
    
Route::put('update-tecnologia/{id}',[TecnologiaController::class, 'update'])->name('Tecnologia.update');
    
Route::get('show-tecnologia/{id}',[TecnologiaController::class, 'show'])->name('Tecnologia.show');
    
Route::delete('destroy-tecnologia/{id}',[TecnologiaController::class, 'destroy'])->name('Tecnologia.destroy');

//fin tecnología

//venta

Route::get('venta', [VentaController::class, 'index'])->name('Venta.index');

Route::get('create-venta', [VentaController::class, 'create'])->name('Venta.create');

Route::post('store-venta', [VentaController::class, 'store'])->name('Venta.store');

Route::get('edit-venta/{id}',[VentaController::class, 'edit'])->name('Venta.edit');
    
Route::put('update-venta/{id}',[VentaController::class, 'update'])->name('Venta.update');
    
Route::get('show-venta/{id}',[VentaController::class, 'show'])->name('Venta.show');
    
Route::delete('destroy-venta/{id}',[VentaController::class, 'destroy'])->name('Venta.destroy');

//Usuario

Route::get('configuration-user/{id}',[UsuarioController::class, 'configuration'])->name('Usuario.configuration');

Route::put('updateconfiguration-user/{id}',[UsuarioController::class, 'updateconfiguration'])->name('Usuario.configurationupdate');

//Educación 

Route::get('educacion', [EducacionController::class, 'index'])->name('Educacion.index');

Route::get('create-educacion', [EducacionController::class, 'create'])->name('Educacion.create');

Route::post('store-educacion', [EducacionController::class, 'store'])->name('Educacion.store');

Route::get('edit-educacion/{id}',[EducacionController::class, 'edit'])->name('Educacion.edit');
    
Route::put('update-educacion/{id}',[EducacionController::class, 'update'])->name('Educacion.update');
    
Route::get('show-educacion/{id}',[EducacionController::class, 'show'])->name('Educacion.show');
    
Route::delete('destroy-educacion/{id}',[EducacionController::class, 'destroy'])->name('Educacion.destroy');

//fin educación

//Experiencia 

Route::get('experiencia', [ExperienciaController::class, 'index'])->name('Experiencia.index');

Route::get('create-experiencia', [ExperienciaController::class, 'create'])->name('Experiencia.create');

Route::post('store-experiencia', [ExperienciaController::class, 'store'])->name('Experiencia.store');

Route::get('edit-experiencia/{id}',[ExperienciaController::class, 'edit'])->name('Experiencia.edit');
    
Route::put('update-experiencia/{id}',[ExperienciaController::class, 'update'])->name('Experiencia.update');
    
Route::get('show-experiencia/{id}',[ExperienciaController::class, 'show'])->name('Experiencia.show');
    
Route::delete('destroy-experiencia/{id}',[ExperienciaController::class, 'destroy'])->name('Experiencia.destroy');

//fin experiencia

//User

Route::get('user', [UsuarioController::class, 'index'])->name('User.index');

Route::get('create-user', [UsuarioController::class, 'create'])->name('User.create');

Route::post('store-user', [UsuarioController::class, 'store'])->name('User.store');

Route::get('edit-user/{id}',[UsuarioController::class, 'edit'])->name('User.edit');
    
Route::put('update-user/{id}',[UsuarioController::class, 'update'])->name('User.update');
    
Route::get('show-user/{id}',[UsuarioController::class, 'show'])->name('User.show');
    
Route::delete('destroy-user/{id}',[UsuarioController::class, 'destroy'])->name('User.destroy');

//fin user
}); 






