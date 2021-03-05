<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services_sections')->insert(
            [
                [
                    'nom'=>'Titre',
                    'texte'=>'Services',
                ],
                [
                    'nom'=>'SousTitre',
                    'texte'=>'Magnam dolores commodi suscipit eius consequatur ex aliquid'
                ]
            ]
            );
    }
}
