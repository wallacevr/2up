@extends('layouts.app')
@section('content')
    <h3 class="text-center my-5">Alteração do Produto #{{ $id}}</h1>
    @livewire('produtos-edit',['id'=>$id])
@endsection
