<?php

use Illuminate\Database\Seeder;
use App\Jalisco;

class JaliscoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jalisco::create([
            'header_text' => '# Esto es **Jalisco**
La palabra Jalisco, formada de las palabras náhuatl *xalli*, que significa arena, *ixtli*, que significa superficie y *co*, desinencia de lugar, significa “sobre el arenal” y sobre este, se han levantado siglos de historia, tradición, folclor, cultura, arte y mucho más.',
            'history' => 'Se especula que el territorio de Jalisco, antes de ser Jalisco, ha sido habitado desde hace 15,000 años. Se han encontrado vestigios de culturas Toltecas, primero y Chichimecas después. En 1530, tras la llegada de los españoles, se fundó la Guadalajara, que sería  capital del Reino de Nueva Galicia.  Ésta fue la ciudad en la que Miguel Hidalgo y Costilla promulgaría la abolición de la esclavitud durante la Guerra de Independencia.

Fue hasta el 16 de junio de 1823, tras la caída del Imperio Mexicano, que se fundara el Estado Libre y Soberano de Xalisco (antes el sonido de la “J” se representaba con una “X”, como sigue ocurriendo en el nombre de “México”), manteniendo a Guadalajara como su capital y dando origen a una entidad que daría mucho de qué hablar.',
            'info_top' => '# ¡Mucho gusto, 
# **Jalisco!**

Jalisco está conformado por 125 municipios, ocho de los cuales cuentan con el distintivo de Pueblo Mágico. Posiblemente has escuchado hablar de Zapopan, Puerto Vallarta o Tlaquepaque, y cada uno de ellos cuenta con algún atractivo especial, como son Tapalpa o Mascota, y ya sea que pruebes las guasanas de Mazamitla, o admires los paisajes de Agave Azul en Tequila, aquí se viven experiencias que en ningún otro lado se viven igual.

Hoy en día Jalisco se distingue por la gran diversidad que envuelve a su geografía.  Tanto en términos de clima, pudiendo pasar de la cálida playa al fresco bosque en unas horas de camino, como en la posibilidad visitar una ciudad a la altura de las grandes urbes, o perderse en callejones llenos de artesanías y tradición, todo a una distancia mínima.',
            'info_left' => 'Así mismo, éste es un estado representativo en diferentes ámbitos: económicamente realiza grandes aportes por su producción de distintos productos agrícolas, al mismo tiempo que es sede de diferentes empresas de tecnología y cuenta con excelentes espacios para foros y convenciones; en términos culturales, varios de los elementos icónicos de México, como lo son el tequila o el mariachi, tienen su hogar y origen en nuestras latitudes. ¿A poco no cuando piensas en un charro te lo imaginas aquí? ¡En el mero Jalisco! 

La cocina del estado cuenta con distintivos como el birote salado, el tejuino o la carne en su jugo, y el entretenimiento y la diversión no se quedan atrás gracias a los múltiples foros y espacios dedicados al esparcimiento con los que contamos.

Jalisco está lleno de los más agradables contrastes, diverso en su gente y abierto a todas las personas que lo quieran visitar. Descubre por tu propia cuenta dónde está la magia de Jalisco, visítalo y hazlo tuyo.',
            'language' => 'es'
        ]);
    }
}
