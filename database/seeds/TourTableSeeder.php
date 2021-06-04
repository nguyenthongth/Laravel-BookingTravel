<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TourTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return  DB::table('tour')->insert([
            [
                'id' => 1,
                'code' => 'abcxyz',
                'departure' => new DateTime(),
                'nr_day' => 3,
                'created_at' => new DateTime(),
                'starting_gate'=>'Nha Trang',
                'price' => 2000000,
                'is_active' => 1,
                'type_id' => 1,
                'image' => 'abcxyz'
            ]
        ]);
    }
}
