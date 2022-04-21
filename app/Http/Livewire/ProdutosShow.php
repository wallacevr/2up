<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Produto;
class ProdutosShow extends Component
{
    public $descricao;
    public $valor;
    public $produto_id;
    public function render()
    {
        return view('livewire.produtos-show');
    }
    public function mount($id){
        $produto=Produto::findOrFail($id);
        $this->descricao=$produto->descricao;
        $this->valor=$produto->valor;
        $this->produto_id=$id;

    }
}
