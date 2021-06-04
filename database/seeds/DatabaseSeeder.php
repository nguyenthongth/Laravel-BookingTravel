<?php

use Database\Seeders\CommentTableSeeder;
use Database\Seeders\DestinyTableSeeder;
use Database\Seeders\NoteTableSeeder;
use Database\Seeders\TypeTourTableSeeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       Model::unguard(); 
        $this->call(UsersTableSeeder::class);
        $this->call(DestinyTableSeeder::class);
        $this->call(CommentTableSeeder::class);
        $this->call(DetailTourTableSeeder::class);
        $this->call(NoteTableSeeder::class);
        $this->call(ProgramTableSeeder::class);
        $this->call(TypeTourTableSeeder::class);
        $this->call(TourTableSeeder::class);
    }
}
