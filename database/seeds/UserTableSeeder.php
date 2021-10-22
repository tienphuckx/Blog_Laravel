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
            'userName' => 'admin',
            'fullName'=>'admin',
            'password' => Hash::make('12345'),
            'role_id' => 1,
            'status' => 1,
        ]);

        User::create([
            'userName' => 'phuc',
            'fullName'=>'Nguyễn Tiến Phúc',
            'password' => Hash::make('12345'),
            'role_id' => 2,
            'status' => 1,
        ]);

        User::create([
            'userName' => 'vu',
            'fullName'=>'Trần Thanh Tuấn Vũ',
            'password' => Hash::make('12345'),
            'role_id' => 2,
            'status' => 1,
        ]);
    }
}
