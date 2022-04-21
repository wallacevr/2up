
@extends('layouts.app')
@section('content')
<h3 class="text-center my-5">Alteração de Usuário #{{ $id }}</h1>
@livewire('usuarios-edit',['id'=>$id])
@endsection
