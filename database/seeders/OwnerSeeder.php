<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            [
                'id' => 1,
                'name' => 'test1',
                'email' => 'test1@test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/09/02 11:11:11',
            ],
            [
                'id' => 2,
                'name' => 'test2',
                'email' => 'test2@test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/09/02 11:11:11',
            ],
            [
                'id' => 3,
                'name' => 'test3',
                'email' => 'test3@test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/09/02 11:11:11',
            ],
            [
                'id' => 4,
                'name' => 'test4',
                'email' => 'test4@test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/09/02 11:11:11',
            ],
            [
                'id' => 5,
                'name' => 'test5',
                'email' => 'test5@test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/09/02 11:11:11',
            ],
            [
                'id' => 6,
                'name' => 'test6',
                'email' => 'test6@test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/09/02 11:11:11',
            ],
        ]);
    }
}
