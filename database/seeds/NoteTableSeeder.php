<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      return  DB::table('note_tour')->insert([
            [
                'id' => 1,
                'tour_id' => 1,
                'content' => 'tour như cặc',
                'created_at' => new DateTime()
            ],
            [
                'id' => 2,
                'tour_id' => 2,
                'content' => 'tour như lồn',
                'created_at' => new DateTime()
            ],
            [
                'id' => 3,
                'tour_id' => 3,
                'content' => 'tour như bùi',
                'created_at' => new DateTime()
            ],
            [
                'id' => 4,
                'tour_id' => 4,
                'content' => 'tour như chim',
                'created_at' => new DateTime()
            ]
        ]);
    }
}
