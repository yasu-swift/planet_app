<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 一件だけinsertする
        DB::table('planets')->insert([
            'name' => '水星',
            'english' => 'MERCURY',
            'radius' => 2439,
            'weight' => '3310',
        ]);

        # paramに配列を代入
        $param = [
            [
                'name' => '金星',
                'english' => 'VENUS',
                'radius' => 6052,
                'weight' => 48700,
            ],
            [
                'name' => '地球',
                'english' => 'EARTH',
                'radius' => 6378,
                'weight' => 59760,
            ]
        ];
        # DB::table->insertでレコードの登録
        DB::table('planets')->insert($param);
    }
}
