<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class UsuariosCreate extends Component
{
    public $name;
    public $cpf;
    public $dtnascimento;
    public $email;
    public $password;
    public $password_confirmation;
    public $created_at;

    protected $rules = [
        'name'=>'required|string|max:255',
        'email'=>'required|email|max:255|unique:users,email',
        'cpf'=>'required|max:11|cpf|unique:users,cpf',
         'dtnascimento'=>'required',
        'password' => 'required|min:8|confirmed'

    ];


    protected $messages = [
        'name.required'=>'Campo nome é Obrigatório!',
        'name.string'=>'O campo nome deve ser preenchido com letras!',
        'name.max'=>'O campo nome deve ser preenchido com máximo de 255 caracteres!',
        'email.required'=>'Campo email é Obrigatório!',
        'email.email'=>'Email preenchido é inválido!',
        'email.unique'=>'Email já cadastrado!',
        'email.max'=>'O campo email deve ser preenchido com máximo de 255 caracteres!',
        'cpf.required'=>'Campo CPF é Obrigatório!',
        'cpf.email'=>'CPF preenchido é inválido!',
        'cpf.unique'=>'CPF já cadastrado!',
        'cpf.max'=>'CPF deve ser preenchido somente com os 11 números sem pontos e traços!',
        'dtnascimento.required'=>'Campo Data de Nascimento é Obrigatório!',
        'email.email'=>'Email preenchido é inválido!',
        'email.max'=>'O campo email deve ser preenchido com máximo de 255 caracteres!',
        'password.required'=>'Campo senha é Obrigatório!',
        'password.min'=>'Senha deve ter no mínimo 8 caracteres!',
        'password.confirmed'=>'Senha e confirmação de senha devem ser iguais!',
    ];

    public function render()
    {
        return view('livewire.usuarios-create');
    }

    public function store(){


        $data = $this->validate();

        try {
            User::create($data);
            toast('Usuário Cadastrado com Sucesso!','success');
            return redirect('usuarios');
        } catch (\Exception $e) {

            toast('Erro ao Cadastrar Usuário!','error');
            return redirect('usuarios');
        }
    }
}
