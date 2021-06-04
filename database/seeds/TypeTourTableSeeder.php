<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeTourTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return DB::table('type_tour')->insert([
            [
                'id' => 1,
                'name' => 'Tour Trong Nước',
                'created_at' => new DateTime()
            ],
            [
                'id' => 2,
                'name' => 'Tour Nước Ngoài',
                'created_at' => new DateTime()
            ]
        ]);
    }
}
