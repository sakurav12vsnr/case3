<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\

class ConditionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'category' => '洋服',
        ];
        DB::table('categories')->insert($param);
    }
}
