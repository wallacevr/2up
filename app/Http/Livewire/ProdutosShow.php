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
        try {
            $produto=Produto::findOrFail($id);
            if(!$produto){
                throw new Exception("Produto Não Encontrado!", 1);
                
            }else{
                $this->descricao=$produto->descricao;
                 $this->valor=$produto->valor;
                $this->produto_id=$id;
            }
            
        } catch (\Throwable $th) {
            toast('Produto Não encontrado!','error');
            return redirect('/produtos');
        }
    }
}
