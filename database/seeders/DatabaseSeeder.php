<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();


        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
                'role'  => 'Admin'
            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => Hash::make('user'),
                'role'  => 'User'
            ],
            [
                'name' => 'User2',
                'email' => 'user2@gmail.com',
                'password' => Hash::make('user2'),
                'role'  => 'User'
            ],
            [
                'name' => 'Kmh',
                'email' => 'kmh@gmail.com',
                'password' => Hash::make('kmh'),
                'role'  => 'Kmh'
            ],
            [
                'name' => 'Juri',
                'email' => 'juri@gmail.com',
                'password' => Hash::make('juri'),
                'role'  => 'Juri'
            ],
        ]);

        DB::table('alternatifs')->insert([
            'user_id' => '2',
            'npm' => fake()->unique()->randomNumber(8),
            'jurusan' => fake()->word,
            'no_telp' => fake()->phoneNumber,
            'semester1' => fake()->randomFloat(2, 1, 4),
            'semester2' => fake()->randomFloat(2, 1, 4),
            'semester3' => fake()->randomFloat(2, 1, 4),
            'semester4' => fake()->randomFloat(2, 1, 4),
            'semester5' => fake()->randomFloat(2, 1, 4),
            'semester6' => fake()->randomFloat(2, 1, 4),
            'prestasi' => fake()->text,
            'pas_foto' => 'pas_foto.jpg',
            'foto_ktp' => 'foto_ktp.jpg',
            'karya_tulis' => 'karya_tulis.pdf',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('alternatifs')->insert([
            'user_id' => '3',
            'npm' => fake()->unique()->randomNumber(8),
            'jurusan' => fake()->word,
            'no_telp' => fake()->phoneNumber,
            'semester1' => fake()->randomFloat(2, 1, 4),
            'semester2' => fake()->randomFloat(2, 1, 4),
            'semester3' => fake()->randomFloat(2, 1, 4),
            'semester4' => fake()->randomFloat(2, 1, 4),
            'semester5' => fake()->randomFloat(2, 1, 4),
            'semester6' => fake()->randomFloat(2, 1, 4),
            'prestasi' => fake()->text,
            'pas_foto' => 'pas_foto.jpg',
            'foto_ktp' => 'foto_ktp.jpg',
            'karya_tulis' => 'karya_tulis.pdf',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kriterias')->insert([
            [
                'kode_kriteria' => 'CF1',
                'nama'          => 'IPK',
                'type'          => 'Core Factor',
                'bobot'         => 5
            ],
            [
                'kode_kriteria' => 'CF2',
                'nama'          => 'Prestasi Akademik & Non Akademik',
                'type'          => 'Core Factor',
                'bobot'         => 5
            ],
            [
                'kode_kriteria' => 'SF1',
                'nama'          => 'Karya Ilmiah',
                'type'          => 'Secondary Factor',
                'bobot'         => 3
            ],
            [
                'kode_kriteria' => 'SF2',
                'nama'          => 'Bahasa Asing',
                'type'          => 'Secondary Factor',
                'bobot'         => 3
            ],
        ]);
    }
}
