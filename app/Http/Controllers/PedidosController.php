<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidosController extends Controller
{
    //
    public function create(){

        return view('pedidos.create');
    }
    public function index(){

        return view('pedidos.index');
    }

    public function edit($id){
        return view('pedidos.edit',['id'=>$id]);
    }
    public function show($id){

        return view('pedidos.show',['id'=>$id]);
    }
}
