<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('123456'),
            'name'=>'admin',
            'mobile' => '0393717371',
            'role_id'=>'2',
            'born' => new Datetime(),
            'created_at'=>new Datetime()
        ];
        return DB::table('users')->insert($data);
        
    }
}