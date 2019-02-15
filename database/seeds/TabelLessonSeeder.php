<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TabelLessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lessons')->insert([
            'id_subjek'=>'1',
            'chapter'=>'Pengenalan GIS',
            'deskripsi'=>'Konsep dasar mengenai GIS merupakan hal yang wajib diketahui terlebih dahulu.',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('lessons')->insert([
            'id_subjek'=>'1',
            'chapter'=>'Pengenalan QGIS',
            'deskripsi'=>'Apa itu QGIS? Disini kita akan mempelajari dasar-dasar penggunaan QGIS',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('lessons')->insert([
            'id_subjek'=>'1',
            'chapter'=>'Membuat Data Spasial',
            'deskripsi'=>'Pemanfaatan data spasial semakin meningkat setelah adanya teknologi pemetaan digital dan pemanfaatannya pada Sistem Informasi Geografis (SIG). Disini kita akan mempelajari bagaimana cara membuat data spasial',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('lessons')->insert([
            'id_subjek'=>'1',
            'chapter'=>'Mengedit / Mengubah Data Spasial',
            'deskripsi'=>'Data spasial yang sudah dibuat sebelumnya dapat diubah sesuai dengan kebutuhan. Disini kita akan mempelajari bagaimana mengubah data spasial agar sesuai dengan kebutuhan.',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('lessons')->insert([
            'id_subjek'=>'1',
            'chapter'=>'Reaktifasi',
            'deskripsi'=>'Disini kita akan mempelajari proses reaktifasi yang sangat bermanfaat untuk keperluan mapping.',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('lessons')->insert([
            'id_subjek'=>'1',
            'chapter'=>'Menampilkan Data Spasial',
            'deskripsi'=>'Disini kita akan mempelajari berbagai cara dalam menampilkan data yang sudah kita dapatkan.',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('lessons')->insert([
            'id_subjek'=>'1',
            'chapter'=>'Topologi',
            'deskripsi'=>'.',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('lessons')->insert([
            'id_subjek'=>'1',
            'chapter'=>'Query Data',
            'deskripsi'=>'.',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('lessons')->insert([
            'id_subjek'=>'1',
            'chapter'=>'Geoprocessing Tools',
            'deskripsi'=>'.',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('lessons')->insert([
            'id_subjek'=>'1',
            'chapter'=>'Layout Peta',
            'deskripsi'=>'.',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
    }
}
