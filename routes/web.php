<?php
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProdutosController;
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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/usuarios','UsuarioController@index')->name('usuarios')->middleware('auth');
Route::get('/usuarios/create','UsuarioController@create')->name('usuarios_create')->middleware('auth');
Route::get('/usuarios/edit/{id}','UsuarioController@edit')->name('usuarios_edit')->middleware('auth');
Route::get('/usuarios/show/{id}','UsuarioController@show')->name('usuarios_show')->middleware('auth');
Route::get('/usuarios/delete/{id}','UsuarioController@delete')->name('usuarios_delete')->middleware('auth');
Route::get('/produto/create','ProdutosController@create')->name('produto_create')->middleware('auth');
Route::get('/produto/edit/{id}','ProdutosController@edit')->name('produto_edit')->middleware('auth');
Route::get('/produto/show/{id}','ProdutosController@show')->name('produto_show')->middleware('auth');
Route::get('/produtos','ProdutosController@index')->name('produtos')->middleware('auth');
Route::get('/pedido/create','PedidosController@create')->name('pedido_create')->middleware('auth');
Route::get('/pedido/edit/{id}','PedidosController@edit')->name('pedido_edit')->middleware('auth');
Route::get('/pedido/show/{id}','PedidosController@show')->name('pedido_show')->middleware('auth');
Route::get('/pedidos','PedidosController@index')->name('pedidos')->middleware('auth');
Auth::Routes(['register'=>false]);

