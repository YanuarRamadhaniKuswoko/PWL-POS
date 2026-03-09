<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
    DB::table('m_barang')->insert([
        // Makanan (kategori_id = 1)
        ['barang_id'=>1,'kategori_id'=>1,'barang_kode'=>'BRG001',
         'barang_nama'=>'Indomie Goreng','harga_beli'=>2500,'harga_jual'=>3500],
        ['barang_id'=>2,'kategori_id'=>1,'barang_kode'=>'BRG002',
         'barang_nama'=>'Roti Tawar','harga_beli'=>8000,'harga_jual'=>12000],
        ['barang_id'=>3,'kategori_id'=>1,'barang_kode'=>'BRG003',
         'barang_nama'=>'Biskuit Oreo','harga_beli'=>5000,'harga_jual'=>8000],
        ['barang_id'=>4,'kategori_id'=>1,'barang_kode'=>'BRG004',
         'barang_nama'=>'Snack Chitato','harga_beli'=>7000,'harga_jual'=>10000],
        ['barang_id'=>5,'kategori_id'=>1,'barang_kode'=>'BRG005',
         'barang_nama'=>'Kopi Sachet','harga_beli'=>1000,'harga_jual'=>2000],
        // Minuman (kategori_id = 2)
        ['barang_id'=>6,'kategori_id'=>2,'barang_kode'=>'BRG006',
         'barang_nama'=>'Aqua 600ml','harga_beli'=>2000,'harga_jual'=>3000],
        ['barang_id'=>7,'kategori_id'=>2,'barang_kode'=>'BRG007',
         'barang_nama'=>'Teh Botol Sosro','harga_beli'=>3000,'harga_jual'=>5000],
        ['barang_id'=>8,'kategori_id'=>2,'barang_kode'=>'BRG008',
         'barang_nama'=>'Pocari Sweat','harga_beli'=>5000,'harga_jual'=>8000],
        ['barang_id'=>9,'kategori_id'=>2,'barang_kode'=>'BRG009',
         'barang_nama'=>'Coca Cola 330ml','harga_beli'=>4000,'harga_jual'=>6000],
        ['barang_id'=>10,'kategori_id'=>2,'barang_kode'=>'BRG010',
         'barang_nama'=>'Jus Buah ABC','harga_beli'=>3500,'harga_jual'=>5500],
        // Kesehatan (kategori_id = 3)
        ['barang_id'=>11,'kategori_id'=>3,'barang_kode'=>'BRG011',
         'barang_nama'=>'Masker Medis','harga_beli'=>5000,'harga_jual'=>8000],
        ['barang_id'=>12,'kategori_id'=>3,'barang_kode'=>'BRG012',
         'barang_nama'=>'Vitamin C 1000mg','harga_beli'=>15000,'harga_jual'=>22000],
        ['barang_id'=>13,'kategori_id'=>3,'barang_kode'=>'BRG013',
         'barang_nama'=>'Hand Sanitizer','harga_beli'=>8000,'harga_jual'=>12000],
        ['barang_id'=>14,'kategori_id'=>3,'barang_kode'=>'BRG014',
         'barang_nama'=>'Paracetamol','harga_beli'=>3000,'harga_jual'=>5000],
        ['barang_id'=>15,'kategori_id'=>3,'barang_kode'=>'BRG015',
         'barang_nama'=>'Plester Hansaplast','harga_beli'=>4000,'harga_jual'=>6500],
    ]);
}
}
