<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       return DB::table('comment')->insert([
            [
                'id' => 1,
                'tour_id' => 1,
                'user_name' => 'Ngọc Úy',
                'comment' => 'tour như cặc',
                'created_at' => new DateTime()
            ],
            [
                'id' => 2,
                'tour_id' => 2,
                'user_name' => 'Thông',
                'comment' => 'tour như lồn',
                'created_at' => new DateTime()
            ],
            [
                'id' => 3,
                'user_name' => 'Thịnh',
                'tour_id' => 3,
                'comment' => 'tour như bùi',
                'created_at' => new DateTime()
            ],
            [
                'id' => 4,
                'tour_id' => 4,
                'user_name' => 'Sơn',
                'comment' => 'tour như chim',
                'created_at' => new DateTime()
            ]
        ]);
    }
}
