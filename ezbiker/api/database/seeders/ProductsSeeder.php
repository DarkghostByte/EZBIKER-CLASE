<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            DB::table('products')->insert([
            'name'=>'Producto1',
            'price'=>2300.00,
            'description'=>'Descripcion del p1',
            'id_category'=>1,
            'img'=>'default.jpg',
                ]);    
            DB::table('products')->insert([
                'name'=>'Producto2',
                'price'=>1000.00,
                'description'=>'Descripcion del p2',
                'id_category'=>1,
                'img'=>'default.jpg',
                ]);
            DB::table('products')->insert([
                'name'=>'Producto3',
                'price'=>1500.00,
                'description'=>'Descripcion del p3',
                'id_category'=>2,
                'img'=>'default.jpg',
                ]);   
        }
}
