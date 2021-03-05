<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSectionParaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services_section_paras')->insert(
            [
                [
                    'titre'=>'Lorem Ipsum',
                    'para'=>'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident',
                    'ico'=>'icofont-computer',
                ],
                [
                    'titre'=>'Dolor Sitema',
                    'para'=>'Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata',
                    'ico'=>'icofont-chart-bar-graph',
                ],
                [
                    'titre'=>'Sed ut perspiciatis',
                    'para'=>'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur',
                    'ico'=>'icofont-earth',
                ],
                [
                    'titre'=>'Sed ut perspiciatis',
                    'para'=>'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur',
                    'ico'=>'icofont-image',
                ],
            ]
            );
    }
}
