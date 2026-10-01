<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'jalan', 'description' => 'jalan dan trotoar'],
            ['name' => 'penerangan', 'description' => 'lampu penerangan jalan'],
            ['name' => 'drainase', 'description' => 'saluran air dan drainase'],
            ['name' => 'taman', 'description' => 'taman dan ruang publik'],
            ['name' => 'tempat sampah', 'description'=> 'fasilitas kebersihan']
        ]);
    }
}
