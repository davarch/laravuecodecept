<?php namespace Article;


use Carbon\Carbon;
use Faker\Factory;
use UnitTester;

class SaveCest
{
    public function _before(UnitTester $I)
    {
    }

    /**
     * @param UnitTester $I
     */
    public function saveArticleTest(UnitTester $I)
    {
        $faker = Factory::create('App\Article');
        $title = $faker->sentence();
        $content = implode((array)$faker->paragraph());
        $created_at = Carbon::now();
        $updated_at = Carbon::now();

        $I->haveRecord(
            'App\Article',
            [
                'title' => $title,
                'content' => $content,
                'created_at' => $created_at,
                'updated_at' => $updated_at
            ]
        );

        $I->seeRecord(
            'articles',
            [
                'title' => $title,
                'content' => $content,
                'created_at' => $created_at,
                'updated_at' => $updated_at
            ]
        );

    }
}
