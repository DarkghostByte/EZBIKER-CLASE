<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>'Administrador',
            'email'=>'admin@gmail.com',
            'password'=> Hash::make('12345678'),
            'img'=>'default.jpg',
            'created_at'=>date('Y-m-d  h:m:s')
        ]);
        DB::table('users')->insert([
            'name'=>'Comprador1',
            'email'=>'com1@gmail.com',
            'password'=> Hash::make('12345678'),
            'img'=>'default.jpg',
            'created_at'=>date('Y-m-d  h:m:s')
        ]);
        DB::table('users')->insert([
            'name'=>'Comprador2',
            'email'=>'com2@gmail.com',
            'password'=> Hash::make('12345678'),
            'img'=>'default.jpg',
            'created_at'=>date('Y-m-d  h:m:s')
        ]);
    }
}
