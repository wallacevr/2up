@extends('layouts.app')
@section('content')
    <h3 class="text-center my-5">Produto #{{$id}}</h1>
    @livewire('produtos-show',['id'=>$id])
@endsection
