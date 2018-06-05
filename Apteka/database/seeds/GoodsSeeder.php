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
                  'category' => 'antipyretic',
                  'is_new' => false,
                  'availability' => true
              ],
              [
                  'title' => "Анальгин",
                  'intro' => "Коротко о анальгине",
                  'body' => "Подробно о анальгине",
                  'composition' => "Состав",
                  'price' => 15,
                  'category' => 'painkillers',
                  'is_new' => false,
                  'availability' => true
              ],
              [
                  'title' => "Ambrobane",
                  'intro' => "Коротко о Ambrobane",
                  'body' => "Подробно о Ambrobane",
                  'composition' => "Состав",
                  'price' => 190,
                  'category' => 'antiviral',
                  'is_new' => true,
                  'availability' => true
              ],
              [
                  'title' => "Кеторол",
                  'intro' => "Коротко о кетороле",
                  'body' => "Подробно о кетороле",
                  'composition' => "Состав",
                  'price' => 99,
                  'category' => 'painkillers',
                  'is_new' => true,
                  'availability' => true
              ],
              [
                  'title' => "Перекись водорода",
                  'intro' => "Коротко о перикиси",
                  'body' => "Подробно о перикиси",
                  'composition' => "Состав",
                  'price' => 22,
                  'category' => 'antiviral',
                  'is_new' => true,
                  'availability' => false
              ],
              [
                  'title' => "Лазалван",
                  'intro' => "Коротко о лазалване",
                  'body' => "Подробно о лазалване",
                  'composition' => "Состав",
                  'price' => 229,
                  'category' => 'antiviral',
                  'is_new' => true,
                  'availability' => true
              ],
              [
                  'title' => "Арбидол",
                  'intro' => "Коротко о арбидоле",
                  'body' => "Подробно о арбидоле",
                  'composition' => "Состав",
                  'price' => 100,
                   'category' => 'antipyretic',
                  'is_new' => true,
                  'availability' => false
              ]
          )
        );
    }
}
