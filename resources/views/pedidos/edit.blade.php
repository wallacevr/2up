@extends('layouts.app')
@section('content')
    <h3 class="text-center my-5">Alteração do Pedido #{{ $id}}</h1>
    @livewire('pedidos-edit',['id'=>$id])
@endsection
