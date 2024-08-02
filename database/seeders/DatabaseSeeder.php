<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Пользователи 
        $password = Hash::make('admin@123');
        User::create([
            'name' => 'admin',
            'email' => 'admin@mail.ru',
            'password' => $password,
            'is_admin' => 1,
        ]);
        User::create([
            'name' => 'user',
            'email' => 'user@mail.ru',
            'password' => $password,
        ]);

        // Товары
        Product::create([
            'articul' => 'A1',
            'name' => 'Зефир',
            'data' => json_encode(['color' => 'red', 'size' => 10]),
        ]);
        Product::create([
            'articul' => 'B1',
            'name' => 'Мармелад',
            'data' => json_encode(['color' => 'blue', 'size' => 20]),
        ]);
        Product::create([
            'articul' => 'C1',
            'name' => 'Шоколад',
            'status' => 'unavailable',
            'data' => json_encode(['color' => 'green', 'size' => 30]),
        ]);
    }
}
