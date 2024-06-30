<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
