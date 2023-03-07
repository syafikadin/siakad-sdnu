<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Siswa;
use App\Models\Student;
use App\Models\Teacher;
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
        User::create([
            'nama' => 'Syafik',
            'nis' => '1',
            'username' => 'syafik',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        ]);

        Teacher::create([
            'nik' => '2',
            'nama' => 'Ody',
            'status' => true,
            'jenis_kelamin' => 'Perempuan',
            'tanggal_lahir' => '1999-06-16',
            'alamat' => 'Solo',
            'username' => 'ody',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
        ]);

        Student::create([
            'nis' => '3',
            'nama' => 'Adin',
            'kelas' => '6A',
            'jenis_kelamin' => 'laki-laki',
            'tanggal_lahir' => '2000-06-16',
            'alamat' => 'Kepanjen',
            'username' => 'adin',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        ]);

        User::factory(5)->create();
        Teacher::factory(5)->create();
        Student::factory(5)->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
