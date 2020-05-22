<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            [
                'name' => 'Новость 1',
                'url' => 'news1',
                'content' => 'News1 content',
                'meta_title' => "News1",
                'meta_description' => 'News1 Description',
                'meta_keywords' => 'News1, keywords',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Новость 2',
                'url' => 'news2',
                'content' => 'News2 content',
                'meta_title' => "News2",
                'meta_description' => 'News2 Description',
                'meta_keywords' => 'News2, keywords',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
