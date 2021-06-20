<?php

use Illuminate\Database\Seeder;
use App\Download;
use Faker\Factory as Faker;
class DownloadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 10) as $index){
            Download::create([
                'name' => $faker->name.'-tool',
                'url'  => $faker->url
            ]);
        }
    }
}
