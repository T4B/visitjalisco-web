<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Benjaminhirsch\NovaSlugField\TextWithSlug;
use Benjaminhirsch\NovaSlugField\Slug;
use Laravel\Nova\Fields\HasMany;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Panel;

class Experience extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Experience';
    public static $group = 'Experiencias';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name_es';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'name_es',
    ];

    /**
     * Get the displayable label of the resource.
     *
     * @return string
     */
    public static function label()
    {
        return 'Categorías';
    }

    /**
     * Get the displayble singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return 'Categoría';
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()
                ->sortable()
                ->hideFromIndex(),

            Text::make('Nombre', 'name_es')
                ->sortable()
                ->exceptOnForms(),

            TextWithSlug::make('Nombre', 'name_es')
                ->slug('slug')
                ->rules('required', 'regex:/^[a-zA-Záéíóú\s]+$/', 'max:254')
                ->onlyOnForms(),

            Slug::make('Slug')
                ->rules('required', 'alpha_dash', 'max:254', 'sometimes:unique:experiences,slug')
                ->showUrlPreview(env('APP_URL') . '/experiencias'),

            Markdown::make('Descripción', 'description_es')
                ->rules('nullable')
                ->hideFromIndex(),

            Image::make('Imagen', 'image')
                ->disk('public')
                ->path('experiences')
                ->rules('max:1024')
                ->creationRules('required')
                ->updateRules('nullable')
                ->prunable()
                ->hideFromIndex(),

            Images::make('Galería', 'gallery')
                ->multiple()
                ->singleImageRules('image')
                ->hideFromIndex()
                ->customPropertiesFields([
                    Markdown::make('Text'),
                    Text::make('Enlace', 'link')
                ]),

            Text::make('Link', function () {
                return '<a class="cursor-pointer text-70 hover:text-primary" href="' . route('experiences.category', ['category' => $this->slug]) . '" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22" class="fill-current"><path class="heroicon-ui" d="M19 6.41L8.7 16.71a1 1 0 1 1-1.4-1.42L17.58 5H14a1 1 0 0 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0V6.41zM17 14a1 1 0 0 1 2 0v5a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7c0-1.1.9-2 2-2h5a1 1 0 0 1 0 2H5v12h12v-5z"/></svg></a>';
            })->asHtml()->exceptOnForms(),

            new Panel('Grid', $this->gridFields()),

            //HasMany::make('Destinos', 'destinations', Destination::class),

            BelongsToMany::make('Publicaciones', 'posts', Post::class),
        ];
    }

    public function gridFields()
    {
        return [
            Text::make('Estilos', 'grid_styles')
                ->hideFromIndex(),

            Boolean::make('Sombra', 'text_shadow')
                ->hideFromIndex(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
