<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hero_sections')->insert(
            [
                [
                    'nom'=>'Titre',
                    'titre'=>'Rayane Ben',
                ],
                [
                    'nom'=>'SousTitre',
                    'titre'=>'Webdev/ Graphiste/ Artiste'
                ]
            ]
            );
    }
}
