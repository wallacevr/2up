<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User;
use App\Models\Produto;
use App\Models\Pedido;
class PedidosCreate extends Component
{
    public $users;
    public $produtos;
    public $user_id;
    public $produto_id;
    public $qtd=1;


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
        return view('livewire.pedidos-create');
    }
    public function mount(){
        $this->users=User::all();
        $this->produtos=Produto::all();
    }

    public function store(){
        $data=$this->validate();
        try {
            Pedido::create($data);
            toast('Pedido Cadastrado com Sucesso!','success');
            return redirect('pedidos');
        } catch (\Exception $e) {
          
            toast('Erro ao Cadastrar Pedido!','error');
            return redirect('pedidos');
        }
    }
}
