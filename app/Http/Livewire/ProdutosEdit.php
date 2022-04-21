<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Produto;
class ProdutosEdit extends Component
{
    public $descricao;
    public $valor;
    public $produto_id;
    protected $rules = [
        'descricao'=>'required|string|max:255',
        'valor'=>'required',


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
        return view('livewire.produtos-edit');
    }

    public function mount($id){
        $produto=Produto::findOrFail($id);
        $this->descricao=$produto->descricao;
        $this->valor=$produto->valor;
        $this->produto_id=$id;

    }

    public function update(){
        $data=$this->validate();
        try {
            $produto=Produto::findOrFail($this->produto_id);
            $produto->update($data);
            toast('Produto Alterado com Sucesso!','success');
            return redirect('usuarios');
        } catch (\Exception $e) {
            toast('error','Erro ao Alterar produto!');
            return redirect('usuarios');
        }
    }
}
