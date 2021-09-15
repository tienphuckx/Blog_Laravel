<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Hardik',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        
        DB::table('admins')->insert([
            'username' => 'admin',
            'password' => 'admin',
        ]);
        */
        Admin::create([
            'username' => 'admin',
            'password' => bcrypt('admin'),
        ]);
    }
}
