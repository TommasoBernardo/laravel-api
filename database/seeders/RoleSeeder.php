<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $roles = [
            [
                'level' => 1,
                'name' => ' Admin',
            ],
            [
                'level' => 2,
                'name' => ' Admin-moderator',
            ],
            [
                'level' => 3,
                'name' => 'Editor',
            ],
            [
                'level' => 4,
                'name' => ' user',
            ],
            [
                'level' => 5,
                'name' => 'publisher',
            ]
        ];

        foreach ($roles as $role) {
            $NewRole = new Role();
            $NewRole->level = $role['level'];
            $NewRole->name = $role['name'];
            $NewRole->save();
        }
    }
}
