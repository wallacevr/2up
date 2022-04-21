<?php

namespace App\Http\Livewire;

use App\User;
use Kdion4891\LaravelLivewireTables\Column;
use Kdion4891\LaravelLivewireTables\TableComponent;

class UsersTable extends TableComponent
{
    public $header_view = 'usuarios.table-header';
    public function query()
    {
        return User::query();
    }

    public function columns()
    {
        return [
            Column::make('ID')->searchable()->sortable(),
            Column::make('Nome','name')->searchable()->sortable(),
            Column::make('CPF','cpf')->searchable()->sortable(),
            Column::make('Data de Nascimento','dtnascimento')->searchable()->sortable(),
            Column::make('Email','email')->searchable()->sortable(),
            Column::make('Ações')->view('usuarios.table-actions'),
        ];
    }

    public function deleteChecked()
    {
        User::whereIn('id', $this->checkbox_values)->delete();
    }
}
