<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class viewerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('viewers')->insert([
            'name'=>'Nayim',
            'password'=>'12345',
            'email'=>'nayim@gmail.com'
        ]);
        DB::table('viewers')->insert([
            'name'=>'Tamim',
            'password'=>'12345',
            'email'=>'tamim@gmail.com'
        ]);
    }
}
