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

Route::get('/', function () {
    Alert::success('Success Title', 'Success Message');
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/usuarios','UsuarioController@index')->name('usuarios');
Route::get('/usuarios/create','UsuarioController@create')->name('usuarios_create');
Route::get('/usuarios/edit/{id}','UsuarioController@edit')->name('usuarios_edit');
Route::get('/usuarios/show/{id}','UsuarioController@show')->name('usuarios_show');
Route::get('/usuarios/delete/{id}','UsuarioController@delete')->name('usuarios_delete');
Route::get('/produto/create','ProdutosController@create')->name('produto_create');
Route::get('/produto/edit/{id}','ProdutosController@edit')->name('produto_edit');
Route::get('/produto/show/{id}','ProdutosController@show')->name('produto_show');
Route::get('/produtos','ProdutosController@index')->name('produtos');
Auth::Routes(['register'=>false]);

