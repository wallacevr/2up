<a href="{{ route('pedido_create')}}">
<button class="btn btn-success">
    Novo Pedido
</button>
</a>
<button class="btn btn-danger" onclick="confirm('Are you sure?') || event.stopImmediatePropagation();" wire:click="deleteChecked">
    Deletar Selecionados
</button>
