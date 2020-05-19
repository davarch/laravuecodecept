<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Faker\Factory as Faker;

/**
 * Class ArticlesTableSeeder
 */
class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Article');

        DB::table('articles')->insert([
            'title' => $faker->sentence(),
            'content' => implode((array)$faker->paragraph()),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
