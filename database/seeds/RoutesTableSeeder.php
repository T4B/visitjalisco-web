<?php

use Illuminate\Database\Seeder;
use App\Route;

class RoutesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Route::create([
            'name_es' => 'Costalegre',
            'color' => 'blue-300',
            'short_description_es' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magnautpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie 
Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam norci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.',
            'full_description_es' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud  endrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.',
            'header_image' => 'routes/ruta-costalegre.jpg',
            'gallery_image' => 'routes/bg-guachimontones-color.jpg',
            'map_image' => 'routes/mapa-guachimontones.png',
            'order' => 1,
            'slug' => 'costalegre',
        ]);
        Route::create([
            'name_es' => 'Guachimontones',
            'color' => 'green-500',
            'short_description_es' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magnautpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie 
Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam norci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.',
            'full_description_es' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud  endrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.',
            'header_image' => 'routes/ruta-guachimontones.jpg',
            'gallery_image' => 'routes/bg-guachimontones-color.jpg',
            'map_image' => 'routes/mapa-guachimontones.png',
            'order' => 2,
            'slug' => 'guachimontones',
        ]);
        Route::create([
            'name_es' => 'Paisaje Agavero',
            'color' => 'green-600',
            'short_description_es' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magnautpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie 
Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam norci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.',
            'full_description_es' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud  endrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.',
            'header_image' => 'routes/ruta-paisaje-agavero.jpg',
            'gallery_image' => 'routes/bg-guachimontones-color.jpg',
            'map_image' => 'routes/mapa-guachimontones.png',
            'order' => 3,
            'slug' => 'paisaje-agavero',
        ]);
        Route::create([
            'name_es' => 'Pueblos Mágicos',
            'color' => 'pink-400',
            'short_description_es' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magnautpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie 
Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam norci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.',
            'full_description_es' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud  endrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.',
            'header_image' => 'routes/ruta-pueblos-magicos.jpg',
            'gallery_image' => 'routes/bg-guachimontones-color.jpg',
            'map_image' => 'routes/mapa-guachimontones.png',
            'order' => 4,
            'slug' => 'pueblos-magicos',
        ]);
        Route::create([
            'name_es' => 'Ribera de Chapala',
            'color' => 'purple-300',
            'short_description_es' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magnautpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie 
Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam norci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.',
            'full_description_es' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud  endrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.',
            'header_image' => 'routes/ruta-ribera-chapala.jpg',
            'gallery_image' => 'routes/bg-guachimontones-color.jpg',
            'map_image' => 'routes/mapa-guachimontones.png',
            'order' => 5,
            'slug' => 'ribera-de-chapala',
        ]);
        Route::create([
            'name_es' => 'Ruta del Peregrino',
            'color' => 'green-100',
            'short_description_es' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magnautpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie 
Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam norci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.',
            'full_description_es' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud  endrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.',
            'header_image' => 'routes/ruta-del-peregrino.jpg',
            'gallery_image' => 'routes/bg-guachimontones-color.jpg',
            'map_image' => 'routes/mapa-guachimontones.png',
            'order' => 6,
            'slug' => 'ruta-del-peregrino',
        ]);
        Route::create([
            'name_es' => 'Ruta Franciscana',
            'color' => 'orange-300',
            'short_description_es' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magnautpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie 
Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam norci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.',
            'full_description_es' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud  endrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.',
            'header_image' => 'routes/ruta-franciscana.jpg',
            'gallery_image' => 'routes/bg-guachimontones-color.jpg',
            'map_image' => 'routes/mapa-guachimontones.png',
            'order' => 7,
            'slug' => 'ruta-franciscana',
        ]);
        Route::create([
            'name_es' => 'Sierra del Tigre',
            'color' => 'red-600',
            'short_description_es' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magnautpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie 
Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam norci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.',
            'full_description_es' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud  endrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.',
            'header_image' => 'routes/ruta-sierra-del-tigre.jpg',
            'gallery_image' => 'routes/bg-guachimontones-color.jpg',
            'map_image' => 'routes/mapa-guachimontones.png',
            'order' => 8,
            'slug' => 'sierra-del-tigre',
        ]);
    }
}
