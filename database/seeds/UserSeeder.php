<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Generator as Faker;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users[]=[
            'name'=>'Arthur',
            'email'=>'Arthur@gmail.com',
            'password'=>Hash::make('123mudar'),
            'cpf'=>'45662841071',
            'dtnascimento'=>'1995-07-01'

        ];
        DB::table('users')->insert($users);
         

        for($i=1; $i < 5; $i++){
            $users=factory(User::class)->make()->toArray();
         
            //dd($users->toArray());
            foreach ($users as $user) {
               User::create($user);
           }
        } 
         
    }
}
