<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User;
class UsuariosShow extends Component
{
    public $name;
    public $cpf;
    public $dtnascimento;
    public $email;
    public $user_id;
    public $updated_at;


    public function mount($id){
        try {
            $this->user_id=$id;
            $usuario=User::findOrFail($id);
            if(!$usuario){
                throw new Exception("Usuário Não Encontrado", 1);
                
            }else{
                $this->name=$usuario->name;
                $this->cpf=$usuario->cpf;
                $this->dtnascimento= date_format($usuario->dtnascimento,'Y-m-d');
                $this->email=$usuario->email;
            }
            
            } catch (\Throwable $th) {
            //throw $th;
                toast("Usuário Não Encontrado!",'error');
                return redirect('usuarios');
             }
    }
    public function render()
    {
        return view('livewire.usuarios-show');
    }
}
