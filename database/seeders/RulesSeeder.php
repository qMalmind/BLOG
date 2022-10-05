<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rules')->insertOrIgnore([
            [
               'rule_name' => 'Расизм',
               'description' =>  'Ненавист к какой либо расе'
            ],
            [  'rule_name' => 'Раскрытие гос тайны',
               'description' =>'Выкладывание госудраственных секретов, какой либо страны'
            ],
            [
                'rule_name' => 'Клевета',
                'description' => 'Распостронение ложной информации о человеке, компании, группы людей'
            ],
            [
                'rule_name' => 'Нарушение АП',
                'description' => 'Плагиат, кража чужой интелектуальной собвсвеннсоти'
            ],
            [
                'rule_name' => 'Ложная информация',
                'description' => 'Распотсронение ложной информации, которое можно навредить здоровью'
            ],
            [
                'rule_name' => 'Нарушение правил платформы',
                'description' => 'Нарушение правил платформы'
            ],
            [
                'rule_name' => 'Создание рекламных статей',
                'description' => 'Статья направленная только на продвижение своего продукта, не несущая полезной информации'
            ],
        ]);
    }
}
