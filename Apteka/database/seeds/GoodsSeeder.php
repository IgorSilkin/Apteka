<?php

use Illuminate\Database\Seeder;

class GoodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('goods')->insert(
          array(
              [
                  'title' => "Парацетамол",
                  'intro' => "Коротко о парацетамоле",
                  'body' => "Подробно о парацетамоле",
                  'composition' => "Состав",
                  'price' => 10,
                  'category_id' => 1,
                  'is_new' => false
              ],
              [
                  'title' => "Анальгин",
                  'intro' => "Коротко о анальгине",
                  'body' => "Подробно о анальгине",
                  'composition' => "Состав",
                  'price' => 15,
                  'category_id' => 2,
                  'is_new' => false
              ],
              [
                  'title' => "Ambrobane",
                  'intro' => "Коротко о Ambrobane",
                  'body' => "Подробно о Ambrobane",
                  'composition' => "Состав",
                  'price' => 190,
                  'category_id' => 3,
                  'is_new' => true
              ],
              [
                  'title' => "Кеторол",
                  'intro' => "Коротко о кетороле",
                  'body' => "Подробно о кетороле",
                  'composition' => "Состав",
                  'price' => 99,
                  'category_id' => 2,
                  'is_new' => true
              ],
              [
                  'title' => "Перекись водорода",
                  'intro' => "Коротко о перикиси",
                  'body' => "Подробно о перикиси",
                  'composition' => "Состав",
                  'price' => 22,
                  'category_id' => 3,
                  'is_new' => true
              ],
              [
                  'title' => "Лазалван",
                  'intro' => "Коротко о лазалване",
                  'body' => "Подробно о лазалване",
                  'composition' => "Состав",
                  'price' => 229,
                  'category_id' => 3,
                  'is_new' => true
              ]
          )
        );
    }
}
