<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User;

use Illuminate\Support\Str;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\LabelColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Illuminate\Support\Facades\Auth;
class UsuariosIndex extends Component
{

    public $usuarios;
    public $listeners =[
        'atualizar'
    ];

    public function mount(){
        $this->usuarios= User::all();

    }
    public function render()
    {

        return view('livewire.usuarios-index');
    }
    public function atualizar()
    {

        return view('livewire.usuarios-index');
    }





}
