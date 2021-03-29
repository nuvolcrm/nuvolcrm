<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();

// Rutas de clientes
Route::get('clients', [clientController::class, 'index'])->name('clients.index');
Route::get('clients/create', [clientController::class, 'create'])->name('clients.create');
Route::put('clients', [clientController::class, 'store'])->name('clients.store');
Route::get('clients/{client}', [clientController::class, 'show'])->name('clients.show');
Route::get('clients/{client}/edit', [clientController::class, 'edit'])->name('clients.edit');
Route::put('clients/{client}', [clientController::class, 'update'])->name('clients.update');

// Rutas de clientes --> Victor
Route::get('/clientes', [App\Http\Controllers\HomeController::class, 'clientes'])->name('clientes');
Route::get('/crear_clientes', [App\Http\Controllers\HomeController::class, 'crear_clientes'])->name('crear_clientes');
Route::get('/editar_cliente', [App\Http\Controllers\ClientesController::class, 'edit'])->name('editar_cliente');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/presupuestos', [App\Http\Controllers\HomeController::class, 'presupuestos'])->name('presupuestos');
Route::get('/ventas', [App\Http\Controllers\HomeController::class, 'ventas'])->name('ventas');
Route::post('/crear', [App\Http\Controllers\ClientesController::class, 'store'])->name('crear.store');
Route::patch('/editar', [App\Http\Controllers\ClientesController::class, 'update'])->name('editar');

Route::get('extra/pedidos', [App\Http\Controllers\HomeController::class, 'pedidos'])->name('pedidos');
Route::get('extra/enlaces', [App\Http\Controllers\HomeController::class, 'enlaces'])->name('enlaces');
Route::get('extra/frecuentes', [App\Http\Controllers\HomeController::class, 'frecuentes'])->name('frecuentes');
Route::get('extra/eliminador', [App\Http\Controllers\HomeController::class, 'eliminador'])->name('eliminador');

Route::get('gestion/operadores', [App\Http\Controllers\HomeController::class, 'operadores'])->name('operadores');
Route::get('gestion/servicios', [App\Http\Controllers\HomeController::class, 'servicios'])->name('servicios');
Route::get('gestion/tarifas', [App\Http\Controllers\HomeController::class, 'tarifas'])->name('tarifas');
Route::get('gestion/colaboradores', [App\Http\Controllers\HomeController::class, 'colaboradores'])->name('colaboradores');
Route::get('gestion/usuarios_roles', [App\Http\Controllers\HomeController::class, 'usuarios_roles'])->name('usuarios_roles');

Route::get('/presupuestos', [App\Http\Controllers\HomeController::class, 'presupuestos'])->name('presupuestos');
Route::get('/crear_presupuestos', [App\Http\Controllers\HomeController::class, 'crear_presupuestos'])->name('crear_presupuestos');

/*
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/clientes', [App\Http\Controllers\HomeController::class, 'clientes'])->name('clientes');
Route::get('/crear_clientes', [App\Http\Controllers\HomeController::class, 'crear_clientes'])->name('crear_clientes');
Route::get('/editar_cliente', [App\Http\Controllers\ClientesController::class, 'edit'])->name('editar_cliente');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/presupuestos', [App\Http\Controllers\HomeController::class, 'presupuestos'])->name('presupuestos');
Route::get('/ventas', [App\Http\Controllers\HomeController::class, 'ventas'])->name('ventas');
Route::post('/crear', [App\Http\Controllers\ClientesController::class, 'store'])->name('crear.store');
Route::patch('/editar', [App\Http\Controllers\ClientesController::class, 'update'])->name('editar');

Route::get('extra/pedidos', [App\Http\Controllers\HomeController::class, 'pedidos'])->name('pedidos');
Route::get('extra/enlaces', [App\Http\Controllers\HomeController::class, 'enlaces'])->name('enlaces');
Route::get('extra/frecuentes', [App\Http\Controllers\HomeController::class, 'frecuentes'])->name('frecuentes');
Route::get('extra/eliminador', [App\Http\Controllers\HomeController::class, 'eliminador'])->name('eliminador');

Route::get('gestion/operadores', [App\Http\Controllers\HomeController::class, 'operadores'])->name('operadores');
Route::get('gestion/servicios', [App\Http\Controllers\HomeController::class, 'servicios'])->name('servicios');
Route::get('gestion/tarifas', [App\Http\Controllers\HomeController::class, 'tarifas'])->name('tarifas');
Route::get('gestion/colaboradores', [App\Http\Controllers\HomeController::class, 'colaboradores'])->name('colaboradores');
Route::get('gestion/usuarios_roles', [App\Http\Controllers\HomeController::class, 'usuarios_roles'])->name('usuarios_roles');
<<<<<<< HEAD



=======
Route::get('/crear_clientes', [App\Http\Controllers\HomeController::class, 'crear_clientes'])->name('crear_clientes');
Route::post('/crear', [App\Http\Controllers\clientesController::class, 'store'])->name('crear');
Route::get('/editar_cliente', [App\Http\Controllers\clientesController::class, 'edit'])->name('editar_cliente');
Route::patch('/editar', [App\Http\Controllers\clientesController::class, 'update'])->name('editar');
Route::get('/crear_presupuestos', [App\Http\Controllers\HomeController::class, 'crear_presupuestos'])->name('crear_presupuestos');
<<<<<<< HEAD
Route::post('/crearPre', [App\Http\Controllers\PresupuestosController::class, 'store'])->name('crearPre');
Route::get('/imprimir-pdf', [App\Http\Controllers\PresupuestosController::class, 'imprimir'])->name('imprimir');
=======
Route::post('/crearPre', [App\Http\Controllers\PresupuestosController::class, 'crearPre'])->name('crearPre');
Route::get('/imprimir-pdf', [App\Http\Controllers\PresupuestosController::class, 'imprimir'])->name('imprimir');
>>>>>>> 3381d2f2507dae39cf56dfd09cdeef7b7842c93b
>>>>>>> 79e19a1620f595068563236487387d0f78285174*/
