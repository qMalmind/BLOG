<?php

namespace Database\Seeders;

use App\Models\ArticleUser;
use App\Models\Report;
use App\Models\Rule;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

class TestingDataSeeder extends Seeder
{
    public $numbers_articles = 10;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i < $this->numbers_articles;$i++) {
            User::factory()->has(Article::factory()->count(random_int(1, 2)))->create();
        }
        for($j=0; $j < $this->numbers_articles;$j++) {
            Article::factory()->has(User::factory()->count(random_int(1, 2)))->create();
        }
    }

}
