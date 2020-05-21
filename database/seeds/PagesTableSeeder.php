<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class PagesTableSeeder
 */
class PagesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table('pages')->insert([
            [
                'name' => 'Главная',
                'url' => '/',
                'content' => 'Index content',
                'meta_title' => "Index",
                'meta_description' => 'Index Description',
                'meta_keywords' => 'Index, keywords',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Новости',
                'url' => 'news',
                'content' => 'News content',
                'meta_title' => "News",
                'meta_description' => 'News Description',
                'meta_keywords' => 'News, keywords',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }

}
