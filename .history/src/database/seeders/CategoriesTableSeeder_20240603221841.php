<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
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

        $param = [
            'category' => 'メンズ',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category' => 'おもちゃ',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category' => '楽器',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category' => '本',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category' => '家電',
        ];
        DB::table('categories')->insert($param);
    }
}
