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
            $article->category_id = 1;
            $article->shortDescription = $faker->text;
            if($i % 2 == 0)
                $article->thumbnail = 'https://i.pinimg.com/564x/1a/1e/40/1a1e40efb19c3dd07b2b68545dc46b51.jpg';
            else if($i % 3 ==0)
                $article->thumbnail = 'https://i.pinimg.com/564x/8a/18/4c/8a184c6a558c2208853ee781697bd977.jpg';
            else if($i % 5 == 0)
                $article->thumbnail = 'https://i.pinimg.com/564x/7b/61/bc/7b61bcc9285938afa346af16eed8d871.jpg';

            $article->content = $faker->text;
            $article->save();
        }
    }
}
