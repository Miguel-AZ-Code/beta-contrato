<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@insucons.com',
            'password' => Hash::make('password'),
        ])->assignRole('Admin');

        User::create([
            'name' => 'José Andres Garcia Chavez',
            'email' => 'andres@insucons.com',
            'password' => Hash::make('63489070'),
        ])->assignRole('Empleado');

        User::create([
            'name' => 'Bebi Vargas Rios',
            'email' => 'bebi@insucons.com',
            'password' => Hash::make('65036977'),
        ])->assignRole('Empleado');

        User::create([
            'name' => 'Kasandra Mamani Rodriguez',
            'email' => 'kasandra@insucons.com',
            'password' => Hash::make('77037288'),
        ])->assignRole('Empleado');

        User::create([
            'name' => 'Gabriel Mercado Pinto',
            'email' => 'gabriel@insucons.com',
            'password' => Hash::make('65849717'),
        ])->assignRole('Empleado');

        User::create([
            'name' => 'YASIR ARCE',
            'email' => 'yasir@gmail.com',
            'password' => Hash::make('12345678'),
        ])->assignRole('Cliente');
    }
}
