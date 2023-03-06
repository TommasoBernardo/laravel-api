<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TypeSeeder::class,
            TechnologySeeder::class,
            UserSeeder::class,
            UserDetailSeeder::class,
            RoleSeeder::class,
            RoleUserSeeder::class,
            PostSeeder::class,
            PostTechnologySeeder::class,

        ]);
    }
}
