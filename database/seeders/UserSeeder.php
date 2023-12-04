<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'no_hp' => '087721191226',
            'tgl_lahir' => date('Ymd', strtotime('19990611')),
            'role' => 'admin',
            'jenis_kelamin' => 'laki-laki',
            'no_ktp' => '000000000000',
        ]);
    }
}
