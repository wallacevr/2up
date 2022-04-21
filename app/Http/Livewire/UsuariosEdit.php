<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User;
use RealRashid\SweetAlert\Facades\Alert;
class UsuariosEdit extends Component
{
    public $name;
    public $cpf;
    public $dtnascimento;
    public $email;
    public $user_id;
    public $updated_at;

    public function rules(){
        return [
            'name'=>"required|string|max:255",
            'email'=>"required|email|max:255|unique:users,email,". $this->user_id,
            'cpf'=>"required|max:11|cpf|unique:users,cpf,". $this->user_id,
             'dtnascimento'=>"required"
        ];
    }


    protected $messages = [
        'name.required'=>'Campo nome é Obrigatório!',
        'name.string'=>'O campo nome deve ser preenchido com letras!',
        'name.max'=>'O campo nome deve ser preenchido com máximo de 255 caracteres!',
        'email.required'=>'Campo email é Obrigatório!',
        'email.email'=>'Email preenchido é inválido!',
        'email.max'=>'O campo email deve ser preenchido com máximo de 255 caracteres!',
        'email.unique'=>'Email já cadastrado!',
        'cpf.required'=>'Campo CPF é Obrigatório!',
        'cpf.unique'=>'CPF já cadastrado!',
        'cpf.email'=>'CPF preenchido é inválido!',
        'cpf.max'=>'CPF deve ser preenchido somente com os 11 números sem pontos e traços!',
        'dtnascimento.required'=>'Campo Data de Nascimento é Obrigatório!',
        'email.email'=>'Email preenchido é inválido!',
        'email.max'=>'O campo email deve ser preenchido com máximo de 255 caracteres!',

    ];

    public function render()
    {
        return view('livewire.usuarios-edit');
    }
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

    public function update(){


        $data = $this->validate();

        try {
            $usuario=User::findOrFail($this->user_id);
            $usuario->update($data);
            toast('Usuário Alterado com Sucesso!','success');
            return redirect('usuarios');
        } catch (\Exception $e) {
            toast('Erro ao Alterar Usuário!','error');
            return redirect('usuarios');
        }
    }

}
