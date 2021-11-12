<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MerchandiseTebleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('merchandiselist')->insert(
            [
                [
                    'merchandiseid' => 1,
                    'name' => 'えんぴつ',
                    'maker' => 'pilot',
                    'price' => 10,
                ],
                [
                    'merchandiseid' => 2,
                    'name' => 'けしごむ',
                    'maker' => 'pilot',
                    'price' => 100,
                ],
                [
                    'merchandiseid' => 3,
                    'name' => 'シャープペンシル',
                    'maker' => 'ゼブラ',
                    'price' => 150,
                ],
                [
                    'merchandiseid' => 4,
                    'name' => 'ボールペン',
                    'maker' => 'ぺんてる',
                    'price' => 120,
                ],
            ]
        );
    }
}
