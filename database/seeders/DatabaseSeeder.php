<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

//         \App\Models\User::factory()->create([
//             'name' => 'Admin',
//             'email' => 'arfan@bayam.my',
//             'phone' => '601133900016'
//         ]);

        User::query()->create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'arfan@bayam.my',
            'phone' => '601133900016',
            'role' => 2,
            'password' => bcrypt('password')
        ]);
    }
}
