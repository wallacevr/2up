<?php

use Illuminate\Database\Seeder;

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
            'name'=>'Wallace',
            'email'=>'wallacevr@gmail.com',
            'password'=>Hash::make('123mudar'),
            'cpf'=>'45662841071',
            'dtnascimento'=>'1985-08-19'

        ];
        DB::table('users')->insert($users);
    }
}
