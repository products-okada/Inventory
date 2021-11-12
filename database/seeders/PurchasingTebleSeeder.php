<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PurchasingTebleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('purchasingList')->insert(
            [
                [
                    'merchandiseid' => 1,
                    'amount' => 100,
                    'price' => 500,
                    'supplier' => 'ABC商事',
                ],
                [
                    'merchandiseid' => 2,
                    'amount' => 500,
                    'price' => 1000,
                    'supplier' => 'ABC商事',
                ],
                [
                    'merchandiseid' => 1,
                    'amount' => 1000,
                    'price' => 1000,
                    'supplier' => 'aiu会社',
                ],
                [
                    'merchandiseid' => 3,
                    'amount' => 200,
                    'price' => 1000,
                    'supplier' => 'aiu会社',
                ],
            ]
        );
    }
}
