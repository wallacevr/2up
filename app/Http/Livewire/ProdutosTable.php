<?php

namespace App\Http\Livewire;

use App\Models\Produto;
use Kdion4891\LaravelLivewireTables\Column;
use Kdion4891\LaravelLivewireTables\TableComponent;

class ProdutosTable extends TableComponent
{
    public $header_view = 'produtos.table-header';
    public function query()
    {
        return Produto::query();
    }

    public function columns()
    {
        return [
            Column::make('ID')->searchable()->sortable(),
            Column::make('Descrição','descricao')->searchable()->sortable(),
            Column::make('Valor(R$)','valor')->searchable()->sortable(),
            Column::make('Ações')->view('produtos.table-actions'),
        ];
    }

    public function deleteChecked()
{
    Produto::whereIn('id', $this->checkbox_values)->delete();
}
}
