<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TabelClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classrooms')->insert([
            'id_user'=>'1',
            'id_subjek'=>'1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
    }
}
