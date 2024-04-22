<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         User::create(
        [
            'name' => 'Juan Carlos',
            'email' => 'juan@45836',
            'phone_number' => '23-42-34-45-56'
        ]);
        User::create(
        [
            'name' => 'Roberto Carlos',
            'email' => 'roberto@45836',
            'phone_number' => '23-67-34-45-56'
        ]);
    }
}
