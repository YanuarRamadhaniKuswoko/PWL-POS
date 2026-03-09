<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
    DB::table('m_supplier')->insert([
        ['supplier_id'=>1,'supplier_kode'=>'SUP001',
         'supplier_nama'=>'PT Sumber Makmur',
         'supplier_alamat'=>'Jl. Makmur No.1, Malang'],
        ['supplier_id'=>2,'supplier_kode'=>'SUP002',
         'supplier_nama'=>'CV Jaya Abadi',
         'supplier_alamat'=>'Jl. Jaya No.2, Surabaya'],
        ['supplier_id'=>3,'supplier_kode'=>'SUP003',
         'supplier_nama'=>'UD Berkah Sejahtera',
         'supplier_alamat'=>'Jl. Berkah No.3, Malang'],
    ]);
}
}
