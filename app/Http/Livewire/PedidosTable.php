<?php

namespace App\Http\Livewire;

use App\Models\Pedido;
use App\User;
use Kdion4891\LaravelLivewireTables\Column;
use Kdion4891\LaravelLivewireTables\TableComponent;

class PedidosTable extends TableComponent
{
    public $header_view = 'pedidos.table-header';
    public function query()
    {
        return Pedido::with('produto','user');
    }

    public function columns()
    {
        return [
            Column::make('ID')->searchable()->sortable(),
            Column::make('Usuário','user.name')->searchable()->sortable(),
            Column::make('Produto','produto.descricao')->searchable()->sortable(),
            Column::make('Valor Unitário(R$)','produto.valor')->searchable()->sortable(),
            Column::make('Qtd','qtd')->searchable()->sortable(),
           
            Column::make('Ações')->view('pedidos.table-actions'),
        ];
    }
    public function deleteChecked()
    {
        Pedido::whereIn('id', $this->checkbox_values)->delete();
    }
}
