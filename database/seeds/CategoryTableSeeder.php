<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(
        [
            'name' => 'Giải Trí',
            'code' => 'giai-tri'
        ]);
        Category::create(
        [
            'name' => 'Giáo Dục',
            'code' => 'giao-duc'
        ]);

        Category::create(
        [
            'name' => 'Công Nghệ',
            'code' => 'cong-nghe'
        ]);

    }
}
