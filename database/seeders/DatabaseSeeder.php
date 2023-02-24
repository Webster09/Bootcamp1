<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Admin;
use App\Models\Aspirasi;
use App\Models\Input_aspirasi;
use App\Models\Kategori;
use App\Models\Penduduk;
use App\Models\Siswa;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Kategori::create(
            [
                'ket_kategori' => 'Kebersihan'
            ]
        );
        Kategori::create(
            [
                'ket_kategori' => 'Keamanan'
            ]
        );
        Kategori::create(
            [
                'ket_kategori' => 'Kesehatan'
            ]
        );
        //Input Data Penduduk
        Siswa::create([
            'nis' => '20208926',
            'kelas' => 'XII TEL 10',
        ]);

        //input data admin
        Admin::create([
            'username' => 'admin',
            'password' => bcrypt('password'),
        ]);
    }
}
