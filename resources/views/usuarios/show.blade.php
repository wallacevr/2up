
@extends('layouts.app')
@section('content')
<h3 class="text-center my-5">Visualização de Usuário #{{ $id }}</h1>
@livewire('usuarios-show',['id'=>$id])
@endsection
