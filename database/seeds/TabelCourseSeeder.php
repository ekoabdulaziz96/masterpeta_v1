<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TabelCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'subjek'=>'Pengelolaan Data Peta Tingkat Dasar Dengan QGIS',
            'deskripsi'=>'Pengelolaan Data Peta merupakan salah satu fundamental yang harus dikuasai oleh mahasiswa maupun praktisi dibidang pemetaan. Pada materi kali ini, akan disampaikan bagaimana mengelola data peta menggunakan QGIS.',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
    }
}
