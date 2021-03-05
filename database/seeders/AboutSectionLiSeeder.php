<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSectionLiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_section_lis')->insert(
            [
                [
                    'li'=>' Ullamco laboris nisi ut aliquip ex ea commodo consequa',
                ],
                [
                    'li'=>' Duis aute irure dolor in reprehenderit in voluptate velit',
                ],
                [
                    'li'=>' Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in',
                ],
            ]
            );
    }
}
