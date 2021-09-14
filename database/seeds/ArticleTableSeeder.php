<?php

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=0; $i<200; $i++){
            $article = new Article;
            $article->title = $faker->text;
            $article->shortDescription = $faker->text;
            $article->thumbnail = '';
            $article->content = $faker->text;
            $article->save();
        }
    }
}
