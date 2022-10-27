<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_categories')->insert([
            [
                'id' => 1,
                'name' => 'キッズファッション',
                'sort_order' => 1
            ],
            [
                'id' => 2,
                'name' => '出産祝い・ギフト',
                'sort_order' => 2
            ],
            [
                'id' => 3,
                'name' => 'ベビーカー',
                'sort_order' => 3
            ]
        ]);
        DB::table('secondary_categories')->insert([
            [
                'id' => 1,
                'name' => '靴',
                'sort_order' => 1,
                'primary_category_id' => 1
            ],
            [
                'id' => 2,
                'name' => 'トップス',
                'sort_order' => 2,
                'primary_category_id' => 1
            ],
            [
                'id' => 3,
                'name' => 'バッグ・ランドセル',
                'sort_order' => 3,
                'primary_category_id' => 1
            ],
            [
                'id' => 4,
                'name' => 'ギフトセット',
                'sort_order' => 4,
                'primary_category_id' => 2
            ],
            [
                'id' => 5,
                'name' => 'メモリアル記念品',
                'sort_order' => 5,
                'primary_category_id' => 2
            ],
            [
                'id' => 6,
                'name' => 'おむつケーキ',
                'sort_order' => 6,
                'primary_category_id' => 2
            ],
        ]);
    }
}
