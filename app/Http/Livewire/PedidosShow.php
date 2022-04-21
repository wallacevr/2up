<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User;
use App\Models\Produto;
use App\Models\Pedido;
class PedidosShow extends Component
{

    public $users;
    public $produtos;
    public $user_id;
    public $produto_id;
    public $qtd=1;
    public $pedido_id;
    public $total;
    public $valor;


    public function render()
    {
        return view('livewire.pedidos-show');
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



}
