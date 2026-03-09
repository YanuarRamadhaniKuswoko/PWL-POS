<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    public function index() {
        // $exists = DB::table('m_level')->where('level_kode', 'CUS')->exists();
        // if (!$exists) {
        //     DB::insert(
        //         'insert into m_level(level_kode, level_nama, created_at) values(?, ?, ?)',
        //         ['CUS', 'Pelanggan', now()]
        //     );
        //     return 'Insert data baru berhasil';
        // } else {
        //     return 'Data sudah ada';
        // }

        // $row = DB::update(
        // 'update m_level set level_nama = ? where level_kode = ?',
        // ['Customer', 'CUS']
        // );
        //     return 'Update berhasil. Jumlah data diupdate: ' . $row . ' baris';
            
        $row = DB::delete(
        'delete from m_level where level_kode = ?',
        ['CUS']
    );
    return 'Delete berhasil. Jumlah data dihapus: ' . $row . ' baris';
}


    }

