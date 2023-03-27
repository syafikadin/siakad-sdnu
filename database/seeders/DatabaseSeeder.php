<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kelas;
use App\Models\MataPelajaran;
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
            'nama_kelas' => '6A',
            'kelas_id' => '1',
            'jenis_kelamin' => 'laki-laki',
            'tanggal_lahir' => '2000-06-16',
            'alamat' => 'Kepanjen',
            'username' => 'adin',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        ]);

        MataPelajaran::create([
            'kode_mata_pelajaran' => 'BI1',
            'mata_pelajaran' => 'Bahasa Indonesia',
            'kelas_id' => '1'
        ]);

        MataPelajaran::create([
            'kode_mata_pelajaran' => 'BI2',
            'mata_pelajaran' => 'Bahasa Indonesia',
            'kelas_id' => '2'
        ]);

        MataPelajaran::create([
            'kode_mata_pelajaran' => 'BI3',
            'mata_pelajaran' => 'Bahasa Indonesia',
            'kelas_id' => '3'
        ]);

        MataPelajaran::create([
            'kode_mata_pelajaran' => 'BI4',
            'mata_pelajaran' => 'Bahasa Indonesia',
            'kelas_id' => '4'
        ]);

        MataPelajaran::create([
            'kode_mata_pelajaran' => 'BI5',
            'mata_pelajaran' => 'Bahasa Indonesia',
            'kelas_id' => '5'
        ]);

        MataPelajaran::create([
            'kode_mata_pelajaran' => 'BI6',
            'mata_pelajaran' => 'Bahasa Indonesia',
            'kelas_id' => '6'
        ]);

        Kelas::create([
            'nama_kelas' => '1',
        ]);

        Kelas::create([
            'nama_kelas' => '2',
        ]);

        Kelas::create([
            'nama_kelas' => '3',
        ]);

        Kelas::create([
            'nama_kelas' => '4',
        ]);

        Kelas::create([
            'nama_kelas' => '5',
        ]);

        Kelas::create([
            'nama_kelas' => '6',
        ]);

        // Kelas::create([
        //     'kelas' => '2A',
        // ]);

        // Kelas::create([
        //     'kelas' => '2B',
        // ]);

        // Kelas::create([
        //     'kelas' => '3A',
        // ]);

        // Kelas::create([
        //     'kelas' => '3B',
        // ]);

        // Kelas::create([
        //     'kelas' => '4A',
        // ]);

        // Kelas::create([
        //     'kelas' => '4B',
        // ]);

        // Kelas::create([
        //     'kelas' => '5A',
        // ]);

        // Kelas::create([
        //     'kelas' => '5B',
        // ]);

        // Kelas::create([
        //     'kelas' => '6A',
        // ]);

        // Kelas::create([
        //     'kelas' => '6B',
        // ]);

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
