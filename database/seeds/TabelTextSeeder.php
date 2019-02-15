<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TabelTextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            'id_lesson'=>'1',
            'id_sublesson'=>'1',
            'link'=>'https://www.youtube.com/embed/sD4jV_3Qzqs',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        DB::table('videos')->insert([
            'id_lesson'=>'1',
            'id_sublesson'=>'1',
            'link'=>'https://www.youtube.com/embed/-33LU5_6Fkg',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
    }
}
