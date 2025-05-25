<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CabangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cabang')->insert([
            ['nama'=>'Cabang A','alamat'=>'Jl. Merdeka No. 123','kota_kab'=>'Majene','created_at'=>now(),'updated_at'=>now()],
            ['nama'=>'Cabang B','alamat'=>'Jl. Cendrawasih No. 45','kota_kab'=>'Polewali Mandar','created_at'=>now(),'updated_at'=>now()],
            ['nama'=>'Cabang C','alamat'=>'Jl. Andi Depu No. 88','kota_kab'=>'Mamuju','created_at'=>now(),'updated_at'=>now()],
        ]);
    }
}