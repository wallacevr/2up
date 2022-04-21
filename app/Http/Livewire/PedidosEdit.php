<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User;
use App\Models\Produto;
use App\Models\Pedido;
class PedidosEdit extends Component
{
    public $users;
    public $produtos;
    public $user_id;
    public $produto_id;
    public $qtd=1;
    public $pedido_id;
    public $total;
    public $valor;

    protected $rules = [
        'user_id'=>'required',
        'produto_id'=>'required',
        'qtd'=>'required',

    ];


    protected $messages = [
        'user_id.required'=>'Selecione um Usuário!',
        'produto_id.required'=>'Selecione um Produto!',
        'qtd.required'=>'Favor informar a Quantidade do Produto selecionado!',

    ];

    public function render()
    {
        return view('livewire.pedidos-edit');
    }

    public function mount($id){
        
    try {
        $pedido=Pedido::where('id','=',$id)->with('produto')->get(); 
       
        if(!$pedido){
            throw new Exception('Pedido Não encontrado!');
            
        }else{
            $this->users=User::all();
            $this->produtos=Produto::all();
            

            $this->pedido_id=$pedido[0]->id;
            $this->user_id=$pedido[0]->user_id;
            $this->produto_id=$pedido[0]->produto_id;
            $this->qtd=$pedido[0]->qtd;
            $this->valor=$pedido[0]->produto->valor;
            $this->total=number_format(($this->qtd * $this->valor), 2, '.', '');
        }
    } catch (\Exception $e) {
        toast('Pedido Não encontrado!','error');
        return redirect('/pedidos');
       
    }    
        

    }

    public function atualizadados(){
        $produto=Produto::find($this->produto_id);
        $this->valor=$produto->valor;
        $this->total=number_format(($this->qtd * $this->valor), 2, '.', '');

    }

    public function update(){
        $data=$this->validate();
        try {
            $pedido=Pedido::where('id','=',$this->pedido_id);
            $pedido->update($data);
            toast('Pedido Alterado com Sucesso!','success');
            return redirect('pedidos');
        } catch (\Exception $e) {
            
            toast('error','Erro ao Alterar pedido!');
            return redirect('pedidos');
        }
    }
}
