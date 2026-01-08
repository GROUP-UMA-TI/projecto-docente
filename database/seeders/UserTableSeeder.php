<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Juan',
                'lastname' => 'Pérez',
                'genero' => 'M',
                'email' => 'juan.perez@example.com',
                'password' => Hash::make('123456'),
                'grado' => '10',
                'firma' => '',
                'status' => 1,
            ],

        ];

        User::insert($users);
    }
}
