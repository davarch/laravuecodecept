<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'id' => '1',
                'name' => 'access'
            ],
            [
                'id' => '2',
                'name' => 'admin'
            ],
            [
                'id' => '3',
                'name' => 'manager'
            ]
        ]);

        DB::table('role_user')->insert([
            [
                'role_id' => '1',
                'user_id' => '1'
            ],
            [
                'role_id' => '1',
                'user_id' => '2'
            ],
            [
                'role_id' => '2',
                'user_id' => '1'
            ],
            [
                'role_id' => '3',
                'user_id' => '2'
            ]
        ]);
    }
}
