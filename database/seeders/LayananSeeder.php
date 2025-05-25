<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('layanan')->insert([
            ['nama'=>'Hair Cut','deskripsi'=>'','harga'=>'20000','durasi'=>'15','created_at'=>now(),'updated_at'=>now()],
            ['nama'=>'Hair Coloring','deskripsi'=>'','harga'=>'50000','durasi'=>'25','created_at'=>now(),'updated_at'=>now()],
            ['nama'=>'Hair Perming','deskripsi'=>'','harga'=>'35000','durasi'=>'20','created_at'=>now(),'updated_at'=>now()],
            ['nama'=>'Rebonding','deskripsi'=>'','harga'=>'100000','durasi'=>'15','created_at'=>now(),'updated_at'=>now()],
            ['nama'=>'Hair Treatment','deskripsi'=>'','harga'=>'30000','durasi'=>'15','created_at'=>now(),'updated_at'=>now()],
        ]);
    }
}