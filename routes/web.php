<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientController;
use App\Http\Controllers\PresupuestosController;
use App\Http\Controllers\ventasController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\TarifasController;
use App\Http\Controllers\ColaboradoresController;

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

// Rutas de login
Route::get('/', function () {
    return view('auth.login');
});
Route::get('/welcome', function () {
    return view('welcome');
});

// Rutas de autentificacion
Auth::routes();

// Rutas de clientes
Route::get('clients', [clientController::class, 'index'])->name('clients.index');
Route::get('clients/create', [clientController::class, 'create'])->name('clients.create');
Route::put('clients', [clientController::class, 'store'])->name('clients.store');
Route::get('clients/{client}', [clientController::class, 'show'])->name('clients.show');
Route::get('clients/{client}/edit', [clientController::class, 'edit'])->name('clients.edit');
Route::put('clients/{client}', [clientController::class, 'update'])->name('clients.update');

// Rutas de presupuestos
Route::get('presupuestos', [PresupuestosController::class, 'index'])->name('presupuestos.index');
Route::get('presupuestos/create', [PresupuestosController::class, 'create'])->name('presupuestos.create');
Route::put('presupuestos', [PresupuestosController::class, 'store'])->name('presupuestos.store');
Route::get('presupuestos/{presupuesto}', [PresupuestosController::class, 'show'])->name('presupuestos.show');
Route::get('presupuestos/{presupuesto}/edit', [PresupuestosController::class, 'edit'])->name('presupuestos.edit');
Route::put('presupuestos/{presupuesto}', [PresupuestosController::class, 'update'])->name('presupuestos.update');

// Rutas de ventas
Route::get('ventas', [ventasController::class, 'index'])->name('ventas.index');
Route::get('ventas/create', [ventasController::class, 'create'])->name('ventas.create');
Route::put('ventas', [ventasController::class, 'store'])->name('ventas.store');
Route::get('ventas/{venta}', [ventasController::class, 'show'])->name('ventas.show');
Route::get('ventas/{venta}/edit', [ventasController::class, 'edit'])->name('ventas.edit');
Route::put('ventas/{venta}', [ventasController::class, 'update'])->name('ventas.update');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rutas de pedidos
Route::get('extra/pedidos', [PedidosController::class, 'index'])->name('extra.pedidos.index');
Route::get('extra/pedidos/create', [PedidosController::class, 'create'])->name('extra.pedidos.create');
Route::put('extra/pedidos', [PedidosController::class, 'store'])->name('extra.pedidos.store');
Route::get('extra/pedidos/{pedido}', [PedidosController::class, 'show'])->name('extra.pedidos.show');
Route::get('extra/pedidos/{pedido}/edit', [PedidosController::class, 'edit'])->name('extra.pedidos.edit');
Route::put('extra/pedidos/{pedido}', [PedidosController::class, 'update'])->name('extra.pedidos.update');

// Rutas de tarifas
Route::get('gestion/tarifas', [TarifasController::class, 'index'])->name('gestion.tarifas.index');
Route::get('gestion/tarifas/create', [TarifasController::class, 'create'])->name('gestion.tarifas.create');
Route::put('gestion/tarifas', [TarifasController::class, 'store'])->name('gestion.tarifas.store');
Route::get('gestion/tarifas/{tarifa}', [TarifasController::class, 'show'])->name('gestion.tarifas.show');
Route::get('gestion/tarifas/{tarifa}/edit', [TarifasController::class, 'edit'])->name('gestion.tarifas.edit');
Route::put('gestion/tarifas/{tarifa}', [TarifasController::class, 'update'])->name('gestion.tarifas.update');

// Rutas de colaboradores
Route::get('gestion/colaboradores', [ColaboradoresController::class, 'index'])->name('gestion.colaboradores.index');
Route::get('gestion/colaboradores/create', [ColaboradoresController::class, 'create'])->name('gestion.colaboradores.create');
Route::put('gestion/colaboradores', [ColaboradoresController::class, 'store'])->name('gestion.colaboradores.store');
Route::get('gestion/colaboradores/{colaborador}', [ColaboradoresController::class, 'show'])->name('gestion.colaboradores.show');
Route::get('gestion/colaboradores/{colaborador}/edit', [ColaboradoresController::class, 'edit'])->name('gestion.colaboradores.edit');
Route::put('gestion/colaboradores/{colaborador}', [ColaboradoresController::class, 'update'])->name('gestion.colaboradores.update');

/*
//------------------------------------------------------------------------------------------
Route::get('extra/pedidos', [App\Http\Controllers\HomeController::class, 'pedidos'])->name('pedidos');
Route::get('extra/enlaces', [App\Http\Controllers\HomeController::class, 'enlaces'])->name('enlaces');
Route::get('extra/frecuentes', [App\Http\Controllers\HomeController::class, 'frecuentes'])->name('frecuentes');
Route::get('extra/eliminador', [App\Http\Controllers\HomeController::class, 'eliminador'])->name('eliminador');

Route::get('gestion/operadores', [App\Http\Controllers\HomeController::class, 'operadores'])->name('operadores');
Route::get('gestion/servicios', [App\Http\Controllers\HomeController::class, 'servicios'])->name('servicios');
Route::get('gestion/tarifas', [App\Http\Controllers\HomeController::class, 'tarifas'])->name('tarifas');
Route::get('gestion/colaboradores', [App\Http\Controllers\HomeController::class, 'colaboradores'])->name('colaboradores');
Route::get('gestion/usuarios_roles', [App\Http\Controllers\HomeController::class, 'usuarios_roles'])->name('usuarios_roles');

// Rutas de clientes --> Victor
Route::get('/clientes', [App\Http\Controllers\HomeController::class, 'clientes'])->name('clientes');
Route::get('/crear_clientes', [App\Http\Controllers\HomeController::class, 'crear_clientes'])->name('crear_clientes');
Route::get('/editar_cliente', [App\Http\Controllers\ClientesController::class, 'edit'])->name('editar_cliente');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/presupuestos', [App\Http\Controllers\HomeController::class, 'presupuestos'])->name('presupuestos');
Route::get('/ventas', [App\Http\Controllers\HomeController::class, 'ventas'])->name('ventas');
Route::post('/crear', [App\Http\Controllers\ClientesController::class, 'store'])->name('crear.store');
Route::patch('/editar', [App\Http\Controllers\ClientesController::class, 'update'])->name('editar');
/*
Route::get('/presupuestos', [App\Http\Controllers\HomeController::class, 'presupuestos'])->name('presupuestos');
Route::get('/crear_presupuestos', [App\Http\Controllers\HomeController::class, 'crear_presupuestos'])->name('crear_presupuestos');

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
