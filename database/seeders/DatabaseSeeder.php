<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    private const string PASSWORD = '_strongpassword_';

    public function run()
    {
        $products = [
            [
                'articul' => 'A1',
                'name' => 'Зефир',
                'data' => json_encode(['color' => 'red', 'size' => 10]),
            ],
            [
                'articul' => 'B1',
                'name' => 'Мармелад',
                'data' => json_encode(['color' => 'blue', 'size' => 20]),
            ],
            [
                'articul' => 'C1',
                'name' => 'Шоколад',
                'status' => 'unavailable',
                'data' => json_encode(['color' => 'green', 'size' => 30]),
            ],
        ];

        // Пользователи
        $password = Hash::make(self::PASSWORD);
        User::create([
            'name' => 'user',
            'email' => 'user@test.ru',
            'password' => $password,
        ]);
        User::create([
            'name' => 'admin',
            'email' => 'admin@test.ru',
            'password' => $password,
            'is_admin' => 1,
        ]);

        // Товары
        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
