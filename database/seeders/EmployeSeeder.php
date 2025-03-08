<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EmployeSeeder extends Seeder
{
    public function run(): void
    {
        // Crear una instancia de Faker para generar datos ficticios
        $faker = Faker::create();

        // Insertar datos en la tabla "employes"
        foreach (range(1, 10) as $index) { // Crear 10 registros de ejemplo
            DB::table('employes')->insert([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->phoneNumber,
                'position' => $faker->jobTitle,
                'salary' => $faker->randomFloat(2, 3000, 12000), // Salario entre 3000 y 12000 con 2 decimales
                'hire_date' => $faker->date(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
