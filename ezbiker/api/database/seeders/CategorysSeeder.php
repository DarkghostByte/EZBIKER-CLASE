<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorys')->insert([
            'category'=>'Categoria1',
        ]);
        DB::table('categorys')->insert([
            'category'=>'Categoria2',
        ]);
        DB::table('categorys')->insert([
            'category'=>'Categoria3',
        ]);
        DB::table('categorys')->insert([
            'category'=>'Categoria4',
        ]);
    }
}
