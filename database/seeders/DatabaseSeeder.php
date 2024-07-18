<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'EwinLantapa',
            'email' => 'ewin@test.com',
            'password' => Hash::make('11111111'),
        ]);

        // data dummy for company
        \App\Models\Company::create([
            'name' => 'Badan Pengelolaan Keuangan dan Pendapatan Daerah',
            'email' => 'bpkpd@bolmut.com',
            'address' => 'Jl. Trans Sulawesi, Kaidipang',
            'latitude' => '-7.747033',
            'longitude' => '110.355398',
            'radius_km' => '0.5',
            'time_in' => '07:30',
            'time_out' => '17:00',
        ]);

        \App\Models\Company::create([
            'name' => 'Badan Pencari Wanita',
            'email' => 'bpkpd@bolmut.com',
            'address' => 'Jl. Trans Sulawesi, Kaidipang',
            'latitude' => '-7.747033',
            'longitude' => '110.355398',
            'radius_km' => '0.5',
            'time_in' => '07:30',
            'time_out' => '17:00',
        ]);

        $this->call([
            AttendanceSeeder::class,
            PermissionSeeder::class,
        ]);
    }
}
