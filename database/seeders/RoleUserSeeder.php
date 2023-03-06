<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\User;
use App\Models\Role;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        $users = User::all();

        $roles = Role::all()->pluck('id');

        foreach ($users as $user) {
            $user->roles()->attach($faker->randomElement($roles, 2));
        }
    }
}
