<?php

use Illuminate\Database\Seeder;
use App\Post;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        Post::create([
            'title_es' => 'Un recorrido por las películas de Guillermo del Toro',
            'excerpt_es' => 'Monstruos y criaturas oscuras te esperan en este recorrido que te transportará a otro mundo.',
            'text_es' => '<h2>Un recorrido por las películas de Guillermo del Toro</h2>
Monstruos y criaturas oscuras te esperan en este recorrido que te transportará a otro mundo.  
<h3>Conoce a Guillermo</h3>
El cineasta mexicano que nos ha sumergido en la pantalla con increíbles historias y personajes, nos muestra su visión personal que lo ha llevado a crear todo un mundo de fantasía. Adéntrate en el mundo de Guillermo del Toro y descubre su historia en el recorrido.  

Esta exposición será exhibida por última vez y la ciudad elegida para ello fue Guadalajara, lugar donde nació Guillermo. El MUSA (Museo de las Artes) resguardará esta valiosa exposición hasta octubre, un museo que fue transformado en su interior para dar vida a los más de 900 objetos exhibidos.  
<h3>Forma parte de un cuento de hadas</h3>
Aquí encontrarás objetos tanto de sus películas como de otros artistas que lo han inspirado a crear sus historias. A lo largo del recorrido podrás apreciar toda clase de objetos personales y de la infancia de Guillermo del Toro como el puesto de periódicos donde compraba sus historietas cuando era niño o sus libretas de apuntes. ¡Toda una cápsula del tiempo!  

Pasillos tenebrosos, réplicas en tamaño real de algunos de sus monstruos y objetos espeluznantes te harán sentir dentro de una película del tapatío. Adéntrate en pasillos oscuros llenos de fantasía, terror y ciencia ficción para descubrir todo lo que hay detrás de la creación de estas obras audiovisuales.  

Los monstruos de Guillermo del Toro estarán encantados de conocerte.  

Consulta más información sobre el recorrido en la página oficial: [https://encasaconmismonstruos.com](https://encasaconmismonstruos.com)',
            'image' => 'post/1-turismo_blog_julio_guillermo.jpg',
            'slug_es' => Str::slug('Un recorrido por las películas de Guillermo del Toro'),
        ]);
        Post::create([
            'title_es' => 'El sabor de nuestros antepasados',
            'excerpt_es' => 'Los secretos de la gastronomía prehispánica reviven en manos de Maru Toledo y Las Mujeres del Maíz.',
            'text_es' => '<h2>El sabor de nuestros antepasados</h2>
Los secretos de la gastronomía prehispánica reviven en manos de Maru Toledo y Las Mujeres del Maíz.

La Región Valles de Jalisco resguarda la Ruta del Tequila, donde sus campos de agaves no solo cuentan la historia del tequila, sino la tradición que une a estos municipios, como la gastronomía.
Ahualulco del Mercado está ubicado en esta región, y es el lugar que vio renacer la gastronomía prehispánica jalisciense recuperada por Maru Toledo.

<h3>Una chef del pasado</h3>
Desde pequeña, observaba la pasión con que su abuela cocinaba y los platillos nada comunes que su madre preparaba, fue así como Maru Toledo se contagió de este amor por la gastronomía y de recuperar las tradiciones culinarias de Jalisco. 

Para rescatar estas costumbres prehispánicas, Maru emprendió una búsqueda a los alrededores de Ahualulco para formar un grupo de personas que compartieran estos conocimientos gastronómicos. Es así como nacieron Las mujeres del maíz.

<h3>Unidas por una pasión</h3>
Fogones, metates y molcajetes son solo algunos elementos que unen a este grupo de mujeres. La esencia de haber crecido entre maizales y sus ganas por compartir sus conocimientos culinarios tradicionales las ha llevado a ser reconocidas. Platillos cocinados con técnicas prehispánicas que reviven el sabor tradicional mexicano.

Tortillas hechas a mano, sopes con frijoles y queso, enmoladas, flautas, sopitos de hongo fermentado, dobladitas de pasta verde, mole, pipián y muchos platillos más llenarán tu paladar del tradicional sabor prehispánico, acompañados de salsas martajadas hechas con ingredientes selectos que le dan el excelente toque mexicano. Un manjar de nuestra tierra que sabe a maíz, caña, piloncillo, chocolate y canela. 

Si te interesa, puedes probar sus platillos en Santina de la Covadonga en el Rancho Teuchiteco, lugar donde Maru Toledo recibe a sus comensales e invitados especiales para compartir sus platillos.

Contacta a Maru Toledo y Las Mujeres del Maíz en su página de Facebook. [https://www.facebook.com/MaruToledoVargas/](https://www.facebook.com/MaruToledoVargas/)  ',
            'image' => 'post/2-turismo_blog_julio-Maru-Toledo.jpg',
            'slug_es' => Str::slug('El sabor de nuestros antepasados'),
        ]);
        Post::create([
            'title_es' => 'Una joya en Costalegre',
            'excerpt_es' => 'Costa Careyes, un paraíso arquitectónico a la orilla del mar.',
            'text_es' => '<h2>Una joya en Costalegre</h2>
Costa Careyes, un paraíso arquitectónico a la orilla del mar.

Villas Privadas, Casitas y Bungalows son el tipo de hospedaje que conforman esta hermosa playa fundada por el italiano Gian Franco Brignone en 1968. 

Pero, ¿qué hace de Careyes una propuesta diferente? La arquitectura implementada en las villas de esta playa fue diseñada para disfrutar mejor la naturaleza con espacios más abiertos sin ventanas ni puertas, toda una aventura en la selva.

Esta filosofía de ser uno mismo con la naturaleza, ha llevado a la propuesta de Careyes a cuidar y proteger su medio ambiente como el Proyecto de la Tortuga, que cuida una reserva ecológica con temas de reforestación, calidad de agua y cuidado de los desechos. Unas vacaciones para ser parte de la naturaleza.

<h3>Una costa con mucho arte</h3>
Si ya te estás identificando con esta costa, vas a terminar de enamorarte con su entorno artístico ya que, además de ser un lugar que hace juego con la naturaleza,  Careyes cuenta con una galería de arte y hermosas obras como La Copa del Sol, una copa con 27 metros de diámetro construida en un risco. ¡La vista es increíble!

Un magnífico lugar para soñar y redescubrirte entre sus analogías de vida, por eso, no te puedes perder El Puente de la Edad, un puente de madera que conecta a la costa con una loma de roca, que al llegar, te sorprenderá con un increíble mirador.

Prepárate para descansar, relajarte y soñar en esta hermosa joya de Costalegre.',
            'image' => 'post/3-turismo_blog_julio_careyes.jpg',
            'slug_es' => Str::slug('Una joya en Costalegre')
        ]);
        Post::create([
            'title_es' => 'Turismo de reuniones en Jalisco',
            'excerpt_es' => '¿Evento empresarial? Descubre diferentes lugares que Jalisco te ofrece para este tipo de eventos.',
            'text_es' => '<h2>Turismo de reuniones en Jalisco</h2>
¿Evento empresarial? Descubre diferentes lugares que Jalisco te ofrece para este tipo de eventos.

Jalisco se ha desarrollado en los últimos años como un estado que atrae corporativos e inversionistas generando mayor economía y mejores empleos, es por eso que encontrarás increíbles centros de negocios para hacer un evento empresarial con todo lo que se necesita.

<h3>Grandes reuniones en la ciudad</h3>
En la capital tapatía podrás encontrarte hoteles con amplios salones para tu evento empresarial para grupos pequeños.
PALCCO (Palacio de la Cultura y los Congresos) es un lugar que cuenta con espacio para eventos medianos de hasta 3,500 personas. http://www.palcco.com/
Si lo que buscas es organizar un congreso, convención o evento corporativo, no dudes en consultar con Expo Guadalajara, el centro de convenciones más grande de México y el segundo en América Latina. http://www.expoguadalajara.mx/

<h3>Para reuniones con tradición</h3>
Por su parte, en Tlaquepaque también podrás encontrar la Casa Cultural El Refugio, un lugar rodeado de tradición, gastronomía y más cercano al Aeropuerto de Guadalajara. Además, cuenta con hoteles tradicionales y hoteles boutique, lo que hará su estadía aún más cultural. http://bit.ly/2JWhlbx 

<h3>Disfruta el paisaje agavero durante la reunión</h3>
Si quieren un pretexto para visitar Tequila, el tema de los negocios también es válido. Además de contar con restaurantes y hoteles, en Tequila podrás encontrar salones para tus reuniones de negocios o empresariales como Casa Sauza, Foro José Cuervo o  Centro Cultural Beckmann donde, además, los asistentes podrán disfrutar del paisaje agavero y este hermoso Pueblo Mágico.   
http://bit.ly/CasaSauzaEventos  
http://bit.ly/ForoJoseCuervo  
http://www.fundacionbeckmann.org/  

<h3>Reuniones en la costa jalisciense</h3>
Puerto Vallarta no se puede quedar atrás en el tema de negocios y es que, además de ser un increíble lugar para vacacionar en la costa, su Centro Internacional de Convenciones es ideal para conferencias, congresos, convenciones y mucho más. En este centro encontrarás increíbles instalaciones con múltiples áreas y servicios. [https://cicpuertovallarta.com/](https://cicpuertovallarta.com/)

Así que ya sabes, Jalisco, aparte de ser historia, gastronomía, diversión, también es negocios.',
            'image' => 'post/4-turismo_blog_agosto_negocios_4.jpg',
            'slug_es' => Str::slug('Turismo de reuniones en Jalisco')
        ]);
    }
}
