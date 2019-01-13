<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
        'name'=> 'Reginaldo',
        'email' => 'teste@test.com',
        'password' => bcrypt('secret'),
        'type' => 'admin',
        'phone' => '88536738',
        'sindico' => '0',
      ]);
    }
}
