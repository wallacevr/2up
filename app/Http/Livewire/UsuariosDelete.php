<?php

namespace App\Http\Livewire;
use App\User;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;
class UsuariosDelete extends Component
{
    public $user_id;
    public $listeners =['destroy'];
    public function render()
    {
        return view('livewire.usuarios-delete');
    }
    public function mount($user_id){
        $this->user_id=$user_id;
    }
    public function destroy($id){
        try {
            //code...
            $usuario=User::findOrFail($id);
            $usuario->Delete();
            toast('Usuário Deletado com Sucesso!','success');
            return redirect('/usuarios');
        } catch (\Exception $e) {
            //throw $th;
        }

    }


}
