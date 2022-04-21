<div class="mx-5">
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Email</th>
                <th>Data de Nascimento</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)

                <tr>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->cpf }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ $usuario->dtnascimento->format('d/m/Y') }}</td>
                    <td>

                    @livewire('usuarios-delete',['user_id'=>$usuario->id])

                    </td>
                </tr>

            @endforeach
         </tbody>

        </table>
</div>

<script>
Livewire.on("deleteTriggered", (id) => {

Swal.fire({
    title: `Deseja realmente deletar o registro?`,
            text: "O registro será desativado ",

            buttons: true,
            dangerMode: false,
            showCancelButton: true,
    }).then((result) => {
//if user clicks on delete
        if (result.value) {
     // calling destroy method to delete
            @this.emit('destroy',id);

        }else{

            Swal.fire({
                                title:'Operação cancelada!',
                                //icon:'info',

                                buttons: true,

                            });

        }

    });


});
</script>
