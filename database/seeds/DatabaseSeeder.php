<?php

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
        // $this->call(UserSeeder::class);
        $this->call(ArticlesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(TodosTableSeeder::class);
    }
}
