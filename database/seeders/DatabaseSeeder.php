<?php

namespace Database\Seeders;

use App\Models\Platform;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'laptop',
        //     'email' => 'laptop@example.com',
        // ]);
        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => Hash::make('password')
        // ]);
        Product::create([
            'product' => 'XBox One',
            'quantity' => '10',
            'price' => 10.99,
            'platform_id' => 1
        ]);
        Product::create([
            'product' => 'Playstation 5',
            'quantity' => '8',
            'price' => 21.29,
            'platform_id' => 1
        ]);
        Product::create([
            'product' => 'RTX 3090 Ti',
            'quantity' => '2',
            'price' => 128.88,
            'platform_id' => 2
        ]);
        Product::create([
            'product' => 'IKEA Kvarnven',
            'quantity' => '2',
            'price' => 8.99,
            'platform_id' => 3
        ]);
        Platform::create([
            'nama' => 'Console',
            'slug' => 'console'
        ]);
        Platform::create([
            'nama' => 'Personal Computer',
            'slug' => 'pc'
        ]);
        Platform::create([
            'nama' => 'Furniture',
            'slug' => 'furniture'
        ]);
        User::create([
            'name' => 'Najwa Sahidah Kautsar',
            'email' => 'najwa@email.com',
            'password' => bcrypt('123456')

        ]);
    }
}
