<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'name_es' => 'Cultura',
            'image' => 'experiences/experiencias-cultura.jpg',
        ]);
        Tag::create([
            'name_es' => 'Deportivo',
            'image' => 'experiences/experiencias-deportivo.jpg',
        ]);
        Tag::create([
            'name_es' => 'Gastronómico',
            'image' => 'experiences/experiencias-gastronomico.jpg',
        ]);
        Tag::create([
            'name_es' => 'LGBTTTIQ',
            'image' => 'experiences/experiencias-lgbtttiq.jpg',
        ]);
        Tag::create([
            'name_es' => 'Naturaleza',
            'image' => 'experiences/experiencias-naturaleza.jpg',
        ]);
        Tag::create([
            'name_es' => 'Negocio y reuniones',
            'image' => 'experiences/experiencias-negocio-y-reuniones.jpg',
        ]);
        Tag::create([
            'name_es' => 'Religioso',
            'image' => 'experiences/experiencias-religioso.jpg',
        ]);
        Tag::create([
            'name_es' => 'Salud y Bienestar',
            'image' => 'experiences/experiencias-salud-y-bienestar.jpg',
        ]);
        Tag::create([
            'name_es' => 'Sol y Playa',
            'image' => 'experiences/experiencias-sol-y-playa.jpg',
        ]);
    }
}
