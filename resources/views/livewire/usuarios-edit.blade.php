<div>
<form  wire:submit.prevent="update"   enctype="multipart/form-data" name="usuarioform" id="usuarioform" >
    @if (!$errors->isEmpty())
    <div class="alert alert-danger mx-5 text-center">
        @foreach ($errors->all() as $error)

            {{ $error }}<br/>

        @endforeach
    </div>
    @endif

    <div class="row mx-5">

                <div class="input-group mb-3 col-sm" >
                    <span class="input-group-text" id="basic-addon1">Nome:</span>
                    <input type="text" wire:model.lazy="name" name="nome" class="form-control" placeholder="Nome" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3 col-4" >
                    <span class="input-group-text" id="basic-addon1">CPF:</span>
                    <input type="text" wire:model.lazy="cpf" name="cpf" class="form-control" placeholder="CPF" aria-label="CPF" aria-describedby="basic-addon1">
                </div>
        </div>
        <div class="row mx-5">
                <div class="input-group mb-3 col-sm" >
                    <span class="input-group-text" id="basic-addon1">Email:</span>
                    <input type="email" wire:model.lazy="email" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3 col-4" >
                    <span class="input-group-text" id="basic-addon1">Data de Nascimento:</span>
                    <input type="date" wire:model.lazy="dtnascimento" name="dtnascimento" class="form-control" placeholder="Data de Nascimento" aria-label="Data de Nascimento" aria-describedby="basic-addon1">
                </div>

        </div>

        <div class="row mx-5">
                <button type="submit" class="btn btn-primary mx-3">Salvar</button>
                <button type="reset" class="btn btn-warning mx-3">Limpar</button>
                <a href="{{ route('usuarios')}}"><button type="button" class="btn btn-secondary mx-3">Voltar</button></a>
        </div>

</form>
</div>
