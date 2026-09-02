<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CheckShopStatus extends Command
{
    /**
     * Nama dan argumen perintah yang dipanggil di terminal.
     */
    protected $signature = 'pos:status {jam?}';

    /**
     * Deskripsi perintah saat dilihat melalui 'php artisan list'.
     */
    protected $description = 'Mengecek status operasional Toko Kelontong POS';

    /**
     * Logika utama yang dijalankan oleh perintah.
     */
    public function handle()
    {
        // 1. Menanyakan nama kasir bertugas
        $namaKasir = $this->ask('Masukkan nama Anda: ');

        // 2. Mengambil argumen jam, default ke jam 10 jika kosong
        $jam = $this->argument('jam') ?? 10;

        $this->info("=== SISTEM MONITORING TOKO KELONTONG ===");

        // 3. Pengecekan jam operasional toko (08:00 - 21:00)
        if ($jam >= 8 && $jam <= 21) {
            $this->info("Halo {$namaKasir}, Status Toko pada jam {$jam}:00 WIB adalah: BUKA");
            $this->comment("Silakan kasir bersiap di meja transaksi.");
        } else {
            $this->error("Halo {$namaKasir}, Status Toko pada jam {$jam}:00 WIB adalah: TUTUP");
            $this->warn("Akses transaksi kasir dinonaktifkan sementara.");
        }
    }
}
