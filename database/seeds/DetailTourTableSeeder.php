<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailTourTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'id'=>'1',
            'transfer_info'=>'Xe buýt',
            'hotel_info'=>'Viễn Đông',
            'tour_guide_info'=>'Thông',
            'generate_address'=>'Vinh Hai',
            'generate_time'=>'7h',
            'note'=>'Vé không cho trả lại.',
            'tour_id'=>'1',
        ];


        return DB::table('detail_tour')->insert($data);
    }
}
