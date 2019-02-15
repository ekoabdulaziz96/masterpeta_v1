<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(TabelCourseSeeder::class);
        $this->call(TabelLessonSeeder::class);
        $this->call(TabelVideoSeeder::class);
        $this->call(TabelClassroomSeeder::class);
        $this->call(TabelSubLesson);
    }
}