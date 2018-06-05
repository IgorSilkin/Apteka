<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert(
            array(
                [
                    'email' => "admin@admin.ru",
                    'name' => "admin",
                    'password' => "123123",
                    'is_admin' => true,
                ]
            )
        );
    }
}
