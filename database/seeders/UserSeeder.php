<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@minimarket.test',
            'password' => 'password',
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Kasir 1',
            'email' => 'kasir@minimarket.test',
            'password' => 'password',
            'role' => 'kasir',
        ]);
    }
}
