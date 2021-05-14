<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientController;
use App\Http\Controllers\PresupuestosController;
use App\Http\Controllers\ventasController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\OperadoresController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\TarifasController;
use App\Http\Controllers\ColaboradoresController;
use App\Http\Controllers\EnlacesController;
use App\Http\Controllers\EliminadorController;
use App\Http\Controllers\FrontendController;



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
Route::get('/welcome', function () {
    return view('auth.login');
});
Route::get('/', function () {
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

//Rutas de operadores
Route::get('gestion/operadores', [OperadoresController::class, 'index'])->name('gestion.operadores.index');
Route::get('gestion/operadores/create', [OperadoresController::class, 'create'])->name('gestion.operadores.create');
Route::put('gestion/operadores', [OperadoresController::class, 'store'])->name('gestion.operadores.store');
Route::get('gestion/operadores/{operadore}', [OperadoresController::class, 'show'])->name('gestion.operadores.show');
Route::get('gestion/operadores/{operadore}/edit', [OperadoresController::class, 'edit'])->name('gestion.operadores.edit');
Route::put('gestion/operadores/{operadore}', [OperadoresController::class, 'update'])->name('gestion.operadores.update');

//Rutas de servicios
Route::get('gestion/servicios', [ServiciosController::class, 'index'])->name('gestion.servicios.index');
Route::get('gestion/servicios/create', [ServiciosController::class, 'create'])->name('gestion.servicios.create');
Route::put('gestion/servicios', [ServiciosController::class, 'store'])->name('gestion.servicios.store');
Route::get('gestion/servicios/{servicio}', [ServiciosController::class, 'show'])->name('gestion.servicios.show');
Route::get('gestion/servicios/{servicio}/edit', [ServiciosController::class, 'edit'])->name('gestion.servicios.edit');
Route::put('gestion/servicios/{servicio}', [ServiciosController::class, 'update'])->name('gestion.servicios.update');

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

// Rutas de enlaces
Route::get('extra/enlaces', [EnlacesController::class, 'index'])->name('extra.enlaces.index');
Route::get('extra/enlaces/create', [EnlacesController::class, 'create'])->name('extra.enlaces.create');
Route::put('extra/enlaces', [EnlacesController::class, 'store'])->name('extra.enlaces.store');
Route::get('extra/enlaces/{enlace}', [EnlacesController::class, 'show'])->name('extra.enlaces.show');
Route::get('extra/enlaces/{enlace}/edit', [EnlacesController::class, 'edit'])->name('extra.enlaces.edit');
Route::put('extra/enlaces/{enlace}', [EnlacesController::class, 'update'])->name('extra.enlaces.update');

// Rutas de eliminador
Route::get('extra/eliminador', [EliminadorController::class, 'index'])->name('extra.eliminador.index');
Route::get('extra/eliminador/create', [EliminadorController::class, 'create'])->name('extra.eliminador.create');
Route::put('extra/eliminador', [EliminadorController::class, 'store'])->name('extra.eliminador.store');
Route::get('extra/eliminador/{eliminador}', [EliminadorController::class, 'show'])->name('extra.eliminador.show');
Route::get('extra/eliminador/{eliminador}/edit', [EliminadorController::class, 'edit'])->name('extra.enlac.edit');
Route::put('extra/eliminador/{eliminador}', [EliminadorController::class, 'update'])->name('extra.eliminador.update');

// Ruta de Chart.js
Route::get('chartjs', [ChartJsController::class, 'index'])->name('chartjs.index');

// Rutas de frontend
Route::get('frontend', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('frontend/create', [FrontendController::class, 'create'])->name('frontend.create');
Route::get('frontend/create1', [FrontendController::class, 'create1'])->name('frontend.create1');
Route::get('frontend/create2', [FrontendController::class, 'create2'])->name('frontend.create2');
Route::get('frontend/{fibras_moviles}/edit', [FrontendController::class, 'edit'])->name('frontend.edit');
Route::get('frontend/{fibra}/edit1', [FrontendController::class, 'edit1'])->name('frontend.edit1');
Route::get('frontend/{moviles}/edit2', [FrontendController::class, 'edit2'])->name('frontend.edit2');
Route::put('frontend/store', [FrontendController::class, 'store'])->name('frontend.store');
Route::put('frontend/store1', [FrontendController::class, 'store1'])->name('frontend.store1');
Route::put('frontend/store2', [FrontendController::class, 'store2'])->name('frontend.store2');
Route::put('frontend/{fibras_moviles}/update', [FrontendController::class, 'update'])->name('frontend.update');
Route::put('frontend/{fibra}/update1', [FrontendController::class, 'update1'])->name('frontend.update1');
Route::put('frontend/{moviles}/update2', [FrontendController::class, 'update2'])->name('frontend.update2');
Route::get('frontend/{fibras_moviles}/destroy', [FrontendController::class, 'destroy'])->name('frontend.destroy');
Route::get('frontend/{fibra}/destroy1', [FrontendController::class, 'destroy1'])->name('frontend.destroy1');
Route::get('frontend/{moviles}/destroy2', [FrontendController::class, 'destroy2'])->name('frontend.destroy2');
Route::get('frontend/create_resenas', [FrontendController::class, 'create_resenas'])->name('frontend.create_resenas');
Route::put('frontend/store_resenas', [FrontendController::class, 'store_resenas'])->name('frontend.store_resenas');
Route::get('frontend/{resenas}/destroy_resenas', [FrontendController::class, 'destroy_resenas'])->name('frontend.destroy_resenas');
Route::get('frontend/{resenas}/edit_resenas', [FrontendController::class, 'edit_resenas'])->name('frontend.edit_resenas');
Route::put('frontend/{resenas}/update_resenas', [FrontendController::class, 'update_resenas'])->name('frontend.update_resenas');
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
