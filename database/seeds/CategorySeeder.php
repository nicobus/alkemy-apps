<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Educacion',
            'description' => 'Aplicacion educativas',
        ]);
        DB::table('categories')->insert([
            'name' => 'Libros',
            'description' => 'Libros para ereaders',
        ]);
        DB::table('categories')->insert([
            'name' => 'Fitness',
            'description' => 'Aplicaciones para entrenamiento del cuerpo',
        ]);
        DB::table('categories')->insert([
            'name' => 'Salud',
            'description' => 'Aplicaciones sobre salud y bienestar.',
        ]);
        DB::table('categories')->insert([
            'name' => 'Belleza',
            'description' => 'Aplicaciones de belleza',
        ]);
        DB::table('categories')->insert([
            'name' => 'Sociales',
            'description' => 'Aplicaciones para redes sociales',
        ]);
        DB::table('categories')->insert([
            'name' => 'Juegos',
            'description' => 'Juegos',
        ]);
        DB::table('categories')->insert([
            'name' => 'Edicion',
            'description' => 'Aplicaciones de edicion de fotografia y video',
        ]);

    }
}
