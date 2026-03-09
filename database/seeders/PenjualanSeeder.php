<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('t_penjualan')->insert([
            'penjualan_id'      => $i,
            'user_id'           => 3,
            'pembeli'           => 'Pelanggan ' . $i,
            'penjualan_kode'    => 'PJL' . str_pad($i, 3, '0', STR_PAD_LEFT),
            'penjualan_tanggal' => now()->subDays(10 - $i),
        ]);
        // 3 detail per transaksi
        for ($j = 0; $j < 3; $j++) {
            $barangId = (($i + $j - 1) % 15) + 1;
            DB::table('t_penjualan_detail')->insert([
                'penjualan_id' => $i,
                'barang_id'    => $barangId,
                'harga'        => rand(2000, 20000),
                'jumlah'       => rand(1, 5),
            ]);
        }
    }
    // Reset sequences to avoid duplicate key errors
        DB::statement("SELECT setval('t_penjualan_penjualan_id_seq', (SELECT COALESCE(MAX(penjualan_id), 1) FROM t_penjualan))");
}

}
