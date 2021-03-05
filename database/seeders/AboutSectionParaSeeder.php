<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSectionParaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_section_paras')->insert(
            [
                [
                    'nom'=>'Titre',
                    'texte'=>'je me présente à vous :)',
                ],
                [
                    'nom'=>'SousTitre',
                    'texte'=>'Voluptatem dignissimos provident quasi corporis voluptates sit assum perenda sruen jonee trave'
                ],
                [
                    'nom'=>'Paragraphe1',
                    'texte'=>'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                ],
                [
                    'nom'=>'Paragraphe2',
                    'texte'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                ]

            ]
            );
    }
}
