<?php

use Illuminate\Database\Seeder;
use App\Region;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Region::truncate();
        Region::create([
            'name_es' => 'Región Norte',
            'color' => 'orange-100',
            'short_description_es' => 'Si visitas Jalisco, muy probablemente pases por aquí al disfrutar de la capital, Guadalajara, o al caminar por los bellísimos andadores de Tlaquepaque. ¡Bienvenido! ',
            'full_description_es' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud endrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.',
            'order' => 1,
            'interior_image_default' => 'regions/region_norte_interior.jpg',
            'main_image_default' => 'regions/region_norte_main.jpg',
        ]);
        Region::create([
            'name_es' => 'Región Altos',
            'color' => 'red-300',
            'short_description_es' => 'Si visitas Jalisco, muy probablemente pases por aquí al disfrutar de la capital, Guadalajara, o al caminar por los bellísimos andadores de Tlaquepaque. ¡Bienvenido! ',
            'full_description_es' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud endrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.',
            'order' => 2,
            'interior_image_default' => 'regions/region_altos_interior.jpg',
            'main_image_default' => 'regions/region_altos_main.jpg',
        ]);
        Region::create([
            'name_es' => 'Región Ciénega',
            'color' => 'green-300',
            'short_description_es' => 'Si visitas Jalisco, muy probablemente pases por aquí al disfrutar de la capital, Guadalajara, o al caminar por los bellísimos andadores de Tlaquepaque. ¡Bienvenido! ',
            'full_description_es' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud endrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.',
            'order' => 3,
            'interior_image_default' => 'regions/region_cienega_interior.jpg',
            'main_image_default' => 'regions/region_cienega_main.jpg',
        ]);
        Region::create([
            'name_es' => 'Región Sur y Sureste',
            'color' => 'green-200',
            'short_description_es' => 'Si visitas Jalisco, muy probablemente pases por aquí al disfrutar de la capital, Guadalajara, o al caminar por los bellísimos andadores de Tlaquepaque. ¡Bienvenido! ',
            'full_description_es' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud endrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.',
            'order' => 4,
            'interior_image_default' => 'regions/region_sur_interior.jpg',
            'main_image_default' => 'regions/region_sur_main.jpg',
        ]);
        Region::create([
            'name_es' => 'Región costa',
            'color' => 'blue-500',
            'short_description_es' => 'Si visitas Jalisco, muy probablemente pases por aquí al disfrutar de la capital, Guadalajara, o al caminar por los bellísimos andadores de Tlaquepaque. ¡Bienvenido! ',
            'full_description_es' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud endrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.',
            'order' => 5,
            'interior_image_default' => 'regions/region_costa_interior.jpg',
            'main_image_default' => 'regions/region_costa_main.jpg',
        ]);
        Region::create([
            'name_es' => 'Región Sierra',
            'color' => 'purple-400',
            'short_description_es' => 'Si visitas Jalisco, muy probablemente pases por aquí al disfrutar de la capital, Guadalajara, o al caminar por los bellísimos andadores de Tlaquepaque. ¡Bienvenido! ',
            'full_description_es' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud endrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.',
            'order' => 6,
            'interior_image_default' => 'regions/region_sierra_interior.jpg',
            'main_image_default' => 'regions/region_sierra_main.jpg',
        ]);
        Region::create([
            'name_es' => 'Región Valles',
            'color' => 'green-400',
            'short_description_es' => 'Si visitas Jalisco, muy probablemente pases por aquí al disfrutar de la capital, Guadalajara, o al caminar por los bellísimos andadores de Tlaquepaque. ¡Bienvenido! ',
            'full_description_es' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud endrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.',
            'order' => 7,
            'interior_image_default' => 'regions/region_valles_interior.jpg',
            'main_image_default' => 'regions/region_valles_main.jpg',
        ]);
        Region::create([
            'name_es' => 'Región Centro',
            'color' => 'blue-400',
            'short_description_es' => 'Si visitas Jalisco, muy probablemente pases por aquí al disfrutar de la capital, Guadalajara, o al caminar por los bellísimos andadores de Tlaquepaque. ¡Bienvenido! ',
            'full_description_es' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud endrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.',
            'order' => 8,
            'interior_image_default' => 'regions/region_centro_interior.jpg',
            'main_image_default' => 'regions/region_centro_main.jpg',
        ]);
    }
}
