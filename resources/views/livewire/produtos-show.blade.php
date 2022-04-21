<div>
<form     enctype="multipart/form-data" name="produtoform" id="produtoform" >
        @if (!$errors->isEmpty())
        <div class="alert alert-danger mx-5 text-center">
            @foreach ($errors->all() as $error)

                {{ $error }}<br/>

            @endforeach
        </div>
        @endif


        <div class="row mx-5">

                    <div class="input-group mb-3 col-sm" >
                        <span class="input-group-text" id="basic-addon1">Descrição:</span>
                        <input type="text" wire:model.lazy="descricao" name="desricao" class="form-control" placeholder="Descrição" aria-label="Descrição" aria-describedby="basic-addon1" readonly>
                    </div>

                        <div class="input-group mb-3 col-sm">
                            <span class="input-group-text">R$</span>
                            <input  type="number"  wire:model="valor" value="1000" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" id="c2" readonly/>
                        </div>

        </div>
            <div class="row mx-5">
                    <button type="submit" class="btn btn-primary mx-3">Salvar</button>
                    <button type="reset" class="btn btn-warning mx-3">Limpar</button>
            </div>


    </form>
</div>
