<div>
<form  wire:submit.prevent="store"   enctype="multipart/form-data" name="produtoform" id="produtoform" >
        @if (!$errors->isEmpty())
        <div class="alert alert-danger mx-5 text-center">
            @foreach ($errors->all() as $error)

                {{ $error }}<br/>

            @endforeach
        </div>
        @endif


        <div class="row mx-5">


                        <div class="input-group w-auto p-3">
                            <span class="input-group-text">Usuário</span>
                            <select   wire:model.lazy="user_id"  class="form-select" id="user_id" name="user_id" >
                                    <option value="">Selecione um Usuário</option>
                                    @foreach ($users as $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
                            </select>

                         </div>


                        <div class="input-group w-auto p-3">
                            <span class="input-group-text">Produto</span>
                            <select   wire:model.lazy="produto_id"  class="form-select" id="produto_id" name="produto_id" >
                                    <option value="">Selecione um Produto</option>
                                    @foreach ($produtos as $produto)
                                        <option value="{{$produto->id}}">{{$produto->descricao}}</option>
                                    @endforeach
                            </select>

                         </div>
                         <div class="input-group w-auto p-3">
                            <span class="input-group-text">Quantidade</span>
                            <input  type="number"  wire:model="qtd" value="1" min="1" step="1" data-number-to-fixed="1" data-number-stepfactor="100" class="form-control" id="c2" />
                        </div>


        </div>
            <div class="row mx-5">
                    <button type="submit" class="btn btn-primary mx-3">Salvar</button>
                    <button type="reset" class="btn btn-warning mx-3">Limpar</button>
                    <a href="{{ route('pedidos')}}"><button type="button" class="btn btn-secondary mx-3">Voltar</button></a>
            </div>


    </form>
</div>
