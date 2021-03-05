<?php

namespace Database\Seeders;

use App\Models\ServicesSection;
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
        $this->call(
            [
                HeroSectionSeeder::class,
                AboutSectionParaSeeder::class,
                AboutSectionLiSeeder::class,
                ServicesSectionSeeder::class
            ]
            );
    }
}
