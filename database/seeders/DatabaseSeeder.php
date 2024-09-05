<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kategori;
use App\Models\Level;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Level::create([
            'nama_level' => 'Admin'
        ]);

        Level::create([
            'nama_level' => 'User'
        ]);
        User::create([
            'name' => 'nur',
            'foto' => '',
            'email' => 'nur@gmail.com',
            'password' => bcrypt('12345'),
            'levels_id' => 1,

        ]);
        User::create([
            'name' => 'nurhalisah',
            'foto' => '',
            'email' => 'nurhalisah@gmail.com',
            'password' => bcrypt('12345'),
            'levels_id' => 2,

            
        ]);

        Kategori::create([
            'nama_kategori' => 'Dompet Wanita'
        ]);

        Kategori::create([
            'nama_kategori' => 'Dompet Pria'
        ]);

        Produk::create([
            'nama_produk' => 'dompet zara',
            'kategoris_id' => 1,
            'jumlah' => '2',
            'harga' => '4500000',
            'foto' => '',
            'stok' => '30'
        ]);
        Produk::create([
            'nama_produk' => 'dompet bifold',
            'kategoris_id' => 2,
            'jumlah' => '2',
            'harga' => '6500000',
            'foto' => '',
            'stok' => '20'
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
