<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Major;
class MajorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("majors")->delete();
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            Major::create([
                "name" => $faker->name,
                "description" => $faker->sentence,
                "duration" => $faker->date,
            ]);
        }
    }
}
