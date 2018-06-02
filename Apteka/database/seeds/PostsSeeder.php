<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert(
            array(
                [
                    'title' => "Рекламный пост 1",
                    'intro' => "Кратко рекламы 1",
                    'body' => "Подробно о рекламе 1",
                    'link' => "Ссылка на рекламу 1",
                ],
                [
                    'title' => "Рекламный пост 2",
                    'intro' => "Кратко рекламы 2",
                    'body' => "Подробно о рекламе 2",
                    'link' => "Ссылка на рекламу 2",
                ],
                [
                    'title' => "Рекламный пост 3",
                    'intro' => "Кратко рекламы 3",
                    'body' => "Подробно о рекламе 3",
                    'link' => "Ссылка на рекламу 3",
                ]
            )
        );
    }
}
