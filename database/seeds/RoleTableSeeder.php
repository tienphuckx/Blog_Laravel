<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create( [
            'name' => 'Quan tri',
            'code' => 'admin'
        ]);

        Role::create( [
            'name' => 'Nguoi dung',
            'code' => 'user'
        ]);
    }
}
