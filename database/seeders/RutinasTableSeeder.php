<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RutinasTableSeeder extends Seeder
{
    /**
     * Ejecuta la siembra de la base de datos.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rutinas')->insert([
            [
                'nombre' => 'Rutina Cardio',
                'descripcion' => 'Una rutina enfocada en ejercicios de resistencia cardiovascular.',
                'tipo' => 'Cardio',
                'duracion' => 30, 
                'repeticiones' => 3, 
            ],
            [
                'nombre' => 'Rutina Fuerza',
                'descripcion' => 'Rutina centrada en el entrenamiento de fuerza con pesas.',
                'tipo' => 'Fuerza',
                'duracion' => 45, 
                'repeticiones' => 4, 
            ],
            [
                'nombre' => 'Rutina HIIT',
                'descripcion' => 'Entrenamiento de intervalos de alta intensidad.',
                'tipo' => 'HIIT',
                'duracion' => 20, 
                'repeticiones' => 5, 
            ],
            [
                'nombre' => 'Rutina Flexibilidad',
                'descripcion' => 'Entrenamiento de estiramientos y movilidad.',
                'tipo' => 'Flexibilidad',
                'duracion' => 30, 
                'repeticiones' => 3, 
            ]
        ]);
    }
}
