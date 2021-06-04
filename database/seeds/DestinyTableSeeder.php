<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         return  DB::table('destiny')->insert([
            [
                'id' => 1,
                'name' => 'Hồ Chí Minh',
                'created_at' => new DateTime()
            ],
            [
                'id' => 2,
                'name' => 'Nha Trang',
                'created_at' => new DateTime()
            ],
            [
                'id' => 3,
                'name' => 'Hà Nội',
                'created_at' => new DateTime()
            ],
            [
                'id' => 4,
                'name' => 'Đà Nẵng',
                'created_at' => new DateTime()
            ]
        ]);
    }
}
