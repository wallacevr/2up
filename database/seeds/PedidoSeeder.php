<?php

use Illuminate\Database\Seeder;
use App\Models\Pedido;
class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=1; $i < 50; $i++){
            $pedidos=factory(Pedido::class)->make()->toArray();
         
            //dd($users->toArray());
            foreach ($pedidos as $pedido) {
               Pedido::create($pedido);
           }
        } 
    }
}
