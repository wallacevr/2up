
@extends('layouts.app')
@section('content')
<h1 class="text-center">Lista de Usuários</h1>
<p class="text-right mx-5">

    <a class="btn btn-success" href="{{ route('usuarios_create')}}">Novo Usuários</a>
</p>
@livewire('usuarios-index')

@endsection

