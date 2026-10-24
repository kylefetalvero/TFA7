<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Customer::create([
            'full_name' => 'Alyssa Mercado',
            'email' => 'alyssa.mercado@example.com',
            'phone' => '09171234567',
        ]);

        Customer::create([
            'full_name' => 'Nathan Villareal',
            'email' => 'nathan.villareal@example.com',
            'phone' => '09182345678',
        ]);

        Customer::create([
            'full_name' => 'Bianca Navarro',
            'email' => 'bianca.navarro@example.com',
            'phone' => '09193456789',
        ]);

        Customer::create([
            'full_name' => 'Ethan Valdez',
            'email' => 'ethan.valdez@example.com',
            'phone' => '09204567891',
        ]);

        Customer::create([
            'full_name' => 'Camille Santiago',
            'email' => 'camille.santiago@example.com',
            'phone' => '09215678912',
        ]);

        User::create([
            'username' => 'adrian.castillo',
            'full_name' => 'Adrian Castillo',
        ]);

        User::create([
            'username' => 'sophia.ramirez',
            'full_name' => 'Sophia Ramirez',
        ]);

        User::create([
            'username' => 'marcus.villanueva',
            'full_name' => 'Marcus Villanueva',
        ]);

        User::create([
            'username' => 'isabelle.mendoza',
            'full_name' => 'Isabelle Mendoza',
        ]);

        User::create([
            'username' => 'julian.fernandez',
            'full_name' => 'Julian Fernandez',
        ]);
    }
}