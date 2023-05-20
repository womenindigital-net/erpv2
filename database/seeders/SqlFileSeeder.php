<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SqlFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = public_path('assets/sql/routine.sql');
        $sql = file_get_contents($path);
        \DB::unprepared($sql);
        $path = public_path('assets/sql/routinedtl.sql');
        $sql = file_get_contents($path);
        \DB::unprepared($sql);
    }
}
