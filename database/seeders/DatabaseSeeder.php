<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Antrian;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Antrian::create([
            'no_antrian' => 'U1',
            'tanggal_antrian' => '2023-01-31',
            'user_id'    => 2,
            'nama'       => 'Dwi Purnomo',
            'alamat'     => 'Purwodadi, Purworejo',
            'jenis_kelamin' => 'laki-laki',
            'no_hp'      => '091229248179',
            'no_ktp'     => '3303928049283',
            'poli'       => 1
        ]);

        User::create([
            'name'      => 'Dwi Purnomo',
            'email'     => 'purnomodwi174@gmail.com',
            'password'  => bcrypt('1234'),
            'roles'      => 1
        ]);

        User::create([
            'name'      => 'Admin',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('1234'),
            'roles'      => 2
        ]);

        User::create([
            'name'      => 'Galang Adi Trianto',
            'email'     => 'wartabolanet@gmail.com',
            'password'  => bcrypt('1234'),
            'roles'      => 1
        ]);
    }
}
