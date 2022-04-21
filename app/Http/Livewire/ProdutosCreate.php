<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProdutosCreate extends Component
{
    public $descricao;
    public $valor;


    protected $rules = [
        'descricao'=>'required|string|max:255',
        'valor'=>'required|regex:/^\d+(\,\d{1,2})?$/"',


    ];


    protected $messages = [
        'name.required'=>'Campo Descrição é Obrigatório!',
        'name.string'=>'O campo Descrição deve ser preenchido com letras ou números!',
        'name.max'=>'O campo Desrição deve ser preenchido com máximo de 255 caracteres!',
        'valor.required'=>'Campo Valor é Obrigatório!',
        'valor.regex'=>'Digite um valor válido!',

    ];



    public function render()
    {
        return view('livewire.produtos-create');
    }

    public function store(){
        $data=$this->validate();
        try {
            Produto::create($data);
            toast('Produto Cadastrado com Sucesso!','success');
        } catch (\Exception $e) {
            //throw $th;
        }
    }

}
