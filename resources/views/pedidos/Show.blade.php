@extends('layouts.app')
@section('content')
    <h3 class="text-center my-5">Pedido #{{$id}}</h1>
    @livewire('pedidos-show',['id'=>$id])
@endsection
