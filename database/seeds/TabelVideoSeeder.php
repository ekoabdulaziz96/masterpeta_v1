<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TabelVideoSeeder extends Seeder
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
            'judul'=>'Video Pertama',
            'link'=>'https://www.youtube.com/embed/sD4jV_3Qzqs',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        DB::table('videos')->insert([
            'id_lesson'=>'1',
            'id_sublesson'=>'1',
            'judul'=>'Video Kedua',
            'link'=>'https://www.youtube.com/embed/-33LU5_6Fkg',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
    }
}
