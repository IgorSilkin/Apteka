<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            array(
                [
                    'title' => "Жаропонижающие",
                    'abb' => "antipyretic",
                ],
                [
                    'title' => "Обезболивающие",
                    'abb' => "painkillers",
                ],
                [
                    'title' => "Противовирусные",
                    'abb' => "antiviral",
                ]
            )
        );
    }
}
