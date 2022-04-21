<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //
    public function index(){
        return view ('usuarios.index');
    }

    public function create(){
        return view('usuarios.create');
    }
    public function edit($id){
        return view('usuarios.edit',['id'=>$id]);
    }
    public function show($id){
        return view('usuarios.show',['id'=>$id]);
    }

}
