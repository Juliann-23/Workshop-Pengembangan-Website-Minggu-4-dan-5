<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Menjalankan Seeder Kategori dan Supplier
        $this->call([
            CategorySeeder::class,
            SupplierSeeder::class,
        ]);

        // 2. Menjalankan Factory untuk membuat 50 data produk dummy
        \App\Models\Product::factory(50)->create();
    }
}
