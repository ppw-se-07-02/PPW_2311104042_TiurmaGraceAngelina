<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Penghuni;

class PenghuniController extends Controller
{
    // 1. Insert menggunakan Raw SQL Queries
    public function insertSql()
    {
        $result = DB::insert("
            INSERT INTO penghuni 
            (nama, jenis_kelamin, tanggal_lahir, alamat_asal, tanggal_masuk, status_penghuni, created_at, updated_at)
            VALUES 
            ('Siti Aminah', 
            'Perempuan', 
            '1950-05-15', 
            'Jl. Melati No. 10, Bandung', 
            '2024-01-10',
            'Aktif',
            NOW(),
            NOW())"
        );
        
        dump($result);
    }
    
    // 2. Insert menggunakan Query Builder
    public function insertQB()
    {
        $result = DB::table('penghuni')->insert([
            'nama' => 'Budi Santoso',
            'jenis_kelamin' => 'Laki-laki',
            'tanggal_lahir' => '1948-08-20',
            'alamat_asal' => 'Jl. Mawar No. 25, Jakarta',
            'tanggal_masuk' => '2024-02-15',
            'status_penghuni' => 'Aktif',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        dump($result);
    }
    
    // 3. Insert menggunakan Eloquent ORM
    public function insertEloquent()
    {
        $penghuni = Penghuni::create([
            'nama' => 'Joko Widodo',
            'jenis_kelamin' => 'Laki-laki',
            'tanggal_lahir' => '1952-03-12',
            'alamat_asal' => 'Jl. Kenanga No. 5, Surabaya',
            'tanggal_masuk' => '2024-03-01',
            'status_penghuni' => 'Aktif',
        ]);
        
        dump($penghuni);
    }
}