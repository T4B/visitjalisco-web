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
        Region::truncate();
        Region::create([
            'name_es' => 'Región Norte',
            'color' => 'orange-100',
            'short_description_es' => 'El norte de Jalisco es también conocido como la región Wixárika, esto por la cercanía con las culturas originarias de la zona. Ese es sólo uno de los secretos que resguarda esta espectacular zona.',
            'full_description_es' => '<p>El norte de Jalisco es un espacio cuyos municipios cautivan con su belleza natural y arquitectónica. Además, es el espacio que resguarda una cultura llena de colores y magia, creencias que traen consigo una gran sabiduría, la Wixárika. En medio de valles y una hermosa vegetación, podrás encontrar un espacio bellísimo. </p><p>Uno de los destinos imperdibles al visitar el norte, es el pueblo de San Martín de Bolaños. Aquí podrás encontrar un pueblo que mezcla la tradición católica con la iconografía wixa, con atractivos tales como la Casa de la Moneda o el Templo de la Virgen de Guadalupe.</p><p>Esta es una zona en la que podrás perderte en la magia natural, adquirir artesanías wixas y saborear algunas delicias de la zona. </p>',
            'order' => 1,
            'interior_image_default' => 'regions/region_norte_interior.jpg',
            'main_image_default' => 'regions/region_norte_main.jpg',
            'slug' => 'region-norte',
            'map' => 'regions/region-norte.svg'
        ]);
        Region::create([
            'name_es' => 'Región Altos',
            'color' => 'red-300',
            'short_description_es' => 'Ésta es una de las regiones emblemáticas y que originan los distintivos de Jalisco, prepárate para vivir la tradición en su estado más puro. ',
            'full_description_es' => '<p>La región de los Altos es colindante al exterior con el estado de Aguascalientes. Es un espacio compuesto por un total de 26 municipios entre la parte norte y sur. Esta región guarda hasta el día de hoy, íconos y tradiciones sobre los que se ha fundado la evolución de la cultura jalisciense. Desde los territorios donde se desarrolló la Guerra Cristera, hasta espacios cuya arquitectura pareciera hacernos viajar en el tiempo. Estos lugares y su gente son la imagen del jalisciense noble y comprometido con sus principios, sus raíces y cultura. </p><p>Si quieres un primer acercamiento a esta región, hay dos municipios que no debes dejar de visitar, uno es Lagos de Moreno; Pueblo Mágico cuyas calles y espacios mantienen la esencia del Jalisco colonial. La mejor época para visitar este destino es julio por sus fiestas patronales. </p><p>Por otro lado, tenemos a San Juan de los Lagos, otro espacio bellísimo, bañado por la fe de los fieles que año con año visitan a la Virgen de San Juan y demás figuras pertenecientes a la creencia católica. La Catedral Basílica es un espacio que te dejará sin habla por su belleza y construcción. <\/br>Y bueno, por ahí comenzamos, pero... el traje de charro en Arandas, las carnitas de Tepatitlán, la tostada raspada en Zapotlanejo… cada uno de los diferentes municipios que conforman esta zona tiene un pedacito de magia que ofrecer, ya sea en su aspecto, en sus sabores, en su mercado o en su cultura.</p>',
            'order' => 2,
            'interior_image_default' => 'regions/region_altos_interior.jpg',
            'main_image_default' => 'regions/region_altos_main.jpg',
            'slug' => 'region-altos',
            'map' => 'regions/region-altos.svg'
        ]);
        Region::create([
            'name_es' => 'Región Ribera de Chapala',
            'color' => 'green-300',
            'short_description_es' => 'Diferentes poblados circulan el cuerpo de agua más importante del estado, la Laguna de Chapala.',
            'full_description_es' => '<p>En Jalisco tenemos todo tipo de sitios paradisíacos y, si lo que quieres es relajarte en un clima cálido sin importar la época del año, disfrutar de calles tradicionales y olvidar el ritmo acelerado de la ciudad, Chapala es tu lugar ideal. </p><p>Rodeada por diferentes municipios, el lago de Chapala es el cuerpo de agua más extenso del país. El principal destino en el que uno piensa cuando se menciona este espacio es aquel que lleva su nombre: Chapala, un espacio que se disfruta desde el Malecón en el que podrás pasear, disfrutar de sabrosos tentempiés y encontrar algunas artesanías a la venta.</p><p>A su alrededor podrás descubrir muchos municipios como Jocotepec, Ajijic, Tuxcueca, Poncitlán, Tizapán el Alto, Jamay… o incluso Ocotlán, un espacio rico en su propia tradición y folclor, con propuestas gastronómicas, artesanales y culturales. La Ribera de Chapala es una mezcla de bellezas unidas por un lago. </p>',
            'order' => 3,
            'interior_image_default' => 'regions/region_cienega_interior.jpg',
            'main_image_default' => 'regions/region_cienega_main.jpg',
            'slug' => 'region-cienega',
            'map' => 'regions/region-cienega.svg'
        ]);
        Region::create([
            'name_es' => 'Región Sur y Sureste',
            'color' => 'green-200',
            'short_description_es' => 'Una fogata, el olor a bosque, el sabor de la comida tradicional… así es el sur de Jalisco, y tú debes visitarlo.',
            'full_description_es' => '<p>¿Has oído hablar de lo bellísimo del bosque en Mazamitla? ¿Conoces el pueblo de Tapalpa? ¿Te has ido unos días a Atemajac o a Sayula? Estos son algunos de los lugares del sur de Jalisco donde podrás disfrutar de un clima fresco en medio del bosque.</p><p>Esta zona, además de su clima ideal para escapar del calor, está llena de pintorescos municipios en los que podrás disfrutar de un fin de semana sin ajetreo. Por ejemplo, puedes visitar Tapalpa, rentar una cabaña y visitar las calles de éste Pueblo Mágico. </p><p>Decídete por acercarte a la naturaleza, respira aire puro y visita el sur de Jalisco. No volverás a pensar en lo que es relajarse de la misma forma.</p>',
            'order' => 4,
            'interior_image_default' => 'regions/region_sur_interior.jpg',
            'main_image_default' => 'regions/region_sur_main.jpg',
            'slug' => 'region-sur-y-sureste',
            'map' => 'regions/region-sur-y-sureste.svg'
        ]);
        Region::create([
            'name_es' => 'Región Costa',
            'color' => 'blue-500',
            'short_description_es' => 'Jalisco es un estado famoso por sus sabores y su cultura, pero también por sus playas. Si lo que quieres es arena y mar, ya puedes decir ¡De aquí soy!. ',
            'full_description_es' => '<p>Las playas de Jalisco son de las más famosas a nivel internacional gracias a su belleza, al excelente servicio hotelero y la magia tropical del Pacífico. Estas costas son ideales para relajarse, divertirse y dejar que la playa haga lo suyo.</p><p>Uno de los destinos más populares es Puerto Vallarta, una de las playas favoritas de México y el extranjero, donde puedes tener un momento inolvidable, tanto si te echas a asolearte o nadando un rato, o disfrutando de sus restaurantes y su vida nocturna. Lo mejor para unas vacaciones cálidas en cualquier momento del año.</p><p>Sin embargo, no toda la costa es Vallarta. Existen otros espacios ideales para los amantes del agua salada, por ejemplo, ¿has visitado Costalegre? Esta costa jalisciense reúne todos los elementos necesarios para escapar del estrés del día a día y relajarte disfrutando de los sabores y la vista del lugar.</p>',
            'order' => 5,
            'interior_image_default' => 'regions/region_costa_interior.jpg',
            'main_image_default' => 'regions/region_costa_main.jpg',
            'slug' => 'region-costa',
            'map' => 'regions/region-costa.svg'
        ]);
        Region::create([
            'name_es' => 'Región Sierra',
            'color' => 'purple-400',
            'short_description_es' => '¿Suficiente ajetreo? No lo pienses más, visita la región de la Sierra de Jalisco y déjate maravillar por una zona sin igual.',
            'full_description_es' => '<p>Es momento de liberarse de los aceleres. Dejar el tráfico y el ruido atrás. Dejarse envolver por la magia de los espacios en los que parece que el tiempo sólo ha dejado su lado bueno, pero que en sí se mantienen en otro momento de la historia. Así es la Sierra de Jalisco.</p><p>Con un clima congruente con el territorio que se encuentra en medio de las montañas, existen varios destinos que no te perder, llamémoslos obligatorios en tu visita por la magia que guardan y la tradición. </p><p>Imagina pasear por un lugar donde la naturaleza no se ha acabado de ir y enmarca la arquitectura colonial, como hace San Sebastián del Oeste. O visitar los múltiples museos y espacios arqueológicos de Mascota. No habrá oportunidad para no sorprenderte e incluso cuestionarte si no realizaste sin querer un viaje en el tiempo.</p>',
            'order' => 6,
            'interior_image_default' => 'regions/region_sierra_interior.jpg',
            'main_image_default' => 'regions/region_sierra_main.jpg',
            'slug' => 'region-sierra',
            'map' => 'regions/region-sierra.svg'
        ]);
        Region::create([
            'name_es' => 'Región Paisaje Agavero',
            'color' => 'green-400',
            'short_description_es' => 'El agave azul es uno de los grandes patrimonios de Jalisco, sin embargo, esta región guarda más secretos que el tequila y más bellezas que su horizonte. ',
            'full_description_es' => '<p>El tequila es uno de los elementos icónicos de México y de Jalisco. Esta bebida con denominación de origen es reconocida como uno de los alcoholes favoritos alrededor del mundo, y es por eso que muchas personas conocen el territorio donde se produce, Tequila, un Pueblo Mágico en el que puedes descubrir una propuesta gastronómica magnífica y conocer el proceso de esta gran bebida. </p><p>Sin embargo, eso no lo es todo. A su alrededor, Tequila cuenta con una serie de espacios inigualables. Empezando por el valor histórico, está el municipio de Teuchitlán, donde se encuentran los Guachimontones, edificaciones prehispánicas circulares, únicas en occidente. </p><p>Además, no puedes dejar de disfrutar del paseo colonial que es Amatitán, con su iglesia construida en el S. XVII, un espacio que marca el pasar del tiempo a través de un paisaje inigualable en una de las regiones más representativas del estado.</p>',
            'order' => 7,
            'interior_image_default' => 'regions/region_valles_interior.jpg',
            'main_image_default' => 'regions/region_valles_main.jpg',
            'slug' => 'region-valles',
            'map' => 'regions/region-valles.svg'
        ]);
        Region::create([
            'name_es' => 'Región Centro',
            'color' => 'blue-400',
            'short_description_es' => 'Ahí, donde se encuentra la capital, de ahí hacia sus alrededores, donde se mezcla lo urbano y lo moderno con la tradición y la cultura que, por mucho que pasen los años, nunca se verá disminuida por nada. Este es el Centro de Jalisco.',
            'full_description_es' => '<p>Guadalajara es una de las ciudades más importantes y reconocidas de México, y ese puede ser el punto de partida para quien visita la Región Centro de Jalisco. Ésta es una oportunidad para disfrutar de un espacio urbano que no pierde su tradición y folclor y que se extiende por Guadalajara, Zapopan, Tlaquepaque, Tonalá, Tlajomulco, El Salto, Juanacatlán, Zapotlanejo y Acatlán.  </p><p>¿Y qué tanto hay que hacer? Para empezar puedes vivir una probadita de muchas experiencias recorriendo poca distancia y en poco tiempo. Disfruta de un espacio orientado a la artesanía en Tonalá, adquiere piezas que no encontrarás en otro lugar, y luego corre por un café en una zona tranquila como la Colonia Chapalita en Zapopan. Disfruta de un centro comercial de primera con las mejores marcas en Guadalajara y luego ve a celebrar de manera tradicional al Parián de Tlaquepaque. </p><p>Así el centro de Jalisco, una mezcla en la que, lo que te garantizamos, es que donde te pares podrás comer, pasear y disfrutar de lo mejor.</p>',
            'order' => 8,
            'interior_image_default' => 'regions/region_centro_interior.jpg',
            'main_image_default' => 'regions/region_centro_main.jpg',
            'slug' => 'region-centro',
            'map' => 'regions/region-centro.svg'
        ]);
    }
}
