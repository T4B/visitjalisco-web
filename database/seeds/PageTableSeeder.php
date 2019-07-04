<?php

use Illuminate\Database\Seeder;
use App\Page;


class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create([
            'name_es' => 'Aviso de Privacidad',
            'slug' => 'aviso-de-privacidad',
            'text_es' => '# AVISO DE CONFIDENCIALIDAD
La información y datos personales, contenida en la presente, son para uso exclusivo de la Secretaría de Turismo del Gobierno del Estado de Jalisco y se consideran como información confidencial, de acuerdo a lo que estipula la Ley de Transparencia y Acceso a la Información Pública del Estado de Jalisco y sus Municipios, por lo que solo será utilizada por el área correspondiente para los fines específicos, asimismo solo se permite que estos datos sean transferidos a terceros, en caso de fines estadísticos, científicos o de interés general previstos en el artículo 22 de la citada Ley. Este aviso podrá ser consultado en la página web: [secturjal.jalisco.gob.mx](http://secturjal.jalisco.gob.mx)',
        ]);
    }
}
