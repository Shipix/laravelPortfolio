<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolio_sections')->insert(
        [
            [
                    'titre'=>'Portfolio',
                    'soustitre'=>'Magnam dolores commodi suscipit onsequatur ex aliquid fuga eum quidem',
            ]
        ]
        );
    }
}
