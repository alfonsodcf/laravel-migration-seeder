<?php

use Illuminate\Database\Seeder;
use Faker\Generator as faker;
use App\Package;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 50; $i++){
            $newPackage = new Package();

            $newPackage->title = $faker->company();
            $newPackage->destination = $faker->city() ;
            $newPackage->duration = $faker->numberBetween(1, 25);
            $newPackage->description = $faker->paragraph(5,true);
            $newPackage->price = $faker->randomFloat(2, 90, 999);

            $newPackage->save();

        }
        
    }
}
