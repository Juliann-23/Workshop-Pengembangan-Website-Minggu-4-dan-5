<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $suppliers = [
        ['name' => 'PT. Indofood Sukses Makmur', 'phone' => '021-57958822', 'address' => 'Jakarta Selatan'],
        ['name' => 'PT. Unilever Indonesia Tbk', 'phone' => '021-80827000', 'address' => 'Tangerang'],
        ['name' => 'PT. Mayora Indah Tbk', 'phone' => '021-80637777', 'address' => 'Jakarta Barat']
    ];

    foreach ($suppliers as $sup) {
        \App\Models\Supplier::create($sup);
    }
}
}
