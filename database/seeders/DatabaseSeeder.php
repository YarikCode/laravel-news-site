<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\AdminUser;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        User::factory(10)->create();
        Post::factory(10)->create();
        AdminUser::factory(1)->create([
            "name" => "Admin",
            "email" => "admin@mail.ru",
            "password" => bcrypt("12345")
        ]);
    }
}
