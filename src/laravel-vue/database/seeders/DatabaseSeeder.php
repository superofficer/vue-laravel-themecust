<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'Ioni Bowcher',
            'email' => 'ioni@gmail.com',
            'password' => Hash::make('123456789'),
        ]);
        $this->call(ProductSeeder::class);
    }
}
