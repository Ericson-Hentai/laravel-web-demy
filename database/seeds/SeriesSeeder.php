<?php

use App\Series;
use App\Video;
use Illuminate\Database\Seeder;

class SeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Series::class, 10)->create()->each(function($series) {
            $series->videos()->saveMany(factory(Video::class, 10)->make());
        });
    }
}
