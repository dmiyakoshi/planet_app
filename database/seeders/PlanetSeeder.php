<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PlanetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [[
            'name_ja' => '水星',
            'name' => 'MERCURY',
            'radius' => 2439,
            'weight' => 3310
        ],
        [
            'name_ja' => '金星',
            'name' => 'VENUS',
            'radius' => 6052,
            'weight' => 488700
        ],
        [
            'name_ja' => '地球',
            'name' => 'EARTH',
            'radius' => 6378,
            'weight' => 59760
        ],
        [
            'name_ja' => '火星',
            'name' => 'MARS',
            'radius' => 3397,
            'weight' => 6420
        ],
        [
            'name_ja' => '木星',
            'name' => 'JUPITER',
            'radius' => 71492,
            'weight' => 18993500
        ],
        [
            'name_ja' => '土星',
            'name' => 'SATURN',
            'radius' => 60268,
            'weight' => 5685980
        ],
        [
            'name_ja' => '天王星',
            'name' => 'URANUS',
            'radius' => 25559,
            'weight' => 868910
        ],
        [
            'name_ja' => '海王星',
            'name' => 'NEPTUNE',
            'radius' => 24764,
            'weight' => 1029660
        ]];
        
    }
}
