<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email'=>'admin@gmail.com',
            'password' => Hash::make('123456'),
            'role_id' => 1
        ]);
        User::create([
            'name' => 'vu',
            'email'=>'vu@gmail.com',
            'password' => Hash::make('123456'),
            'role_id' => 2
        ]);
    }
}
