<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $faker = Faker::create();
        foreach (range(1, 15) as $index) {
            DB::table('passports')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'number' => $faker->phoneNumber,
                'date' => $faker->randomNumber($nbDigits = NULL, $strict = false),
                'office' => 'Delhi',
                'filename' => $faker->word,
            ]);
        }
    }
}
