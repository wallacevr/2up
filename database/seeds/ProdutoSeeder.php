<?php

use Illuminate\Database\Seeder;
use App\Models\Produto;
class ProdutoSeeder extends Seeder
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
            $produtos=factory(Produto::class)->make()->toArray();
         
            //dd($users->toArray());
            foreach ($produtos as $produto) {
               Produto::create($produto);
           }
        } 
    }
}
