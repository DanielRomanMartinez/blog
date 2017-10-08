<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Category::create([
            'name' => 'Tareas',
            'description' => 'Descripción de las tareas realizadas',
            'meta_title' => '',
            'meta_description' => '',
            'meta_key' => '',
            'friendly_url' => 'tareas',
            'follow' => 1,
        ]);

        Category::create([
            'name' => 'Recordatorios',
            'description' => 'Descripción de los recordatorios',
            'meta_title' => '',
            'meta_description' => '',
            'meta_key' => '',
            'friendly_url' => 'recordatorios',
            'follow' => 1,
        ]);

        Category::create([
            'name' => 'Recursos',
            'description' => 'Descripción de los recursos',
            'meta_title' => '',
            'meta_description' => '',
            'meta_key' => '',
            'friendly_url' => 'recursos',
            'follow' => 1,
        ]);

        Category::create([
            'name' => 'Eventos',
            'description' => 'Descripción de los eventos',
            'meta_title' => '',
            'meta_description' => '',
            'meta_key' => '',
            'friendly_url' => 'eventos',
            'follow' => 1,
        ]);
    }
}
