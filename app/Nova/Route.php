<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Image;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Laravel\Nova\Fields\HasMany;
use Benjaminhirsch\NovaSlugField\TextWithSlug;
use Benjaminhirsch\NovaSlugField\Slug;

class Route extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Route';
    public static $group = 'Destinos';

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
        'id',
    ];

    /**
     * Get the displayable label of the resource.
     *
     * @return string
     */
    public static function label()
    {
        return 'Rutas';
    }

    /**
     * Get the displayble singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return 'Ruta';
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
                ->rules('required', 'regex:/^[a-zA-Z\s]+$/', 'max:254')
                ->onlyOnForms(),
            Slug::make('Slug')
                ->rules('required', 'alpha_dash', 'max:254', 'sometimes:unique:routes,slug')
                ->showUrlPreview(env('APP_URL') . '/ruta'),

            Select::make('Color', 'color')->options([
                'blue-300' => 'Azul',
                'green-100' => 'Verde claro',
                'green-500' => 'Verde',
                'green-600' => 'Verde oscuro',
                'orange-300' => 'Naranja',
                'pink-400' => 'Rosa',
                'purple-300' => 'Morado',
                'red-600' => 'Rojo',
            ])->displayUsingLabels(),
            Markdown::make('Descripción corta', 'short_description_es')
                ->rules('nullable')
                ->hideFromIndex(),
            Markdown::make('Descripción larga', 'full_description_es')
                ->rules('nullable')
                ->hideFromIndex(),
            Image::make('Imagen Principal', 'header_image')
                ->disk('public')
                ->path('routes')
                ->rules('max:1024')
                ->creationRules('required')
                ->updateRules('nullable')
                ->prunable()
                ->hideFromIndex(),
            Image::make('Imagen fondo galería', 'gallery_image')
                ->disk('public')
                ->path('routes')
                ->rules('max:1024')
                ->creationRules('required')
                ->updateRules('nullable')
                ->prunable()
                ->hideFromIndex(),
            Image::make('Mapa', 'map_image')
                ->disk('public')
                ->path('routes')
                ->rules('max:1024')
                ->creationRules('required')
                ->updateRules('nullable')
                ->prunable()
                ->hideFromIndex(),
            Number::make('Orden', 'order')
                ->sortable(),
            Images::make('Galería', 'gallery')
                ->multiple()
                ->singleImageRules('image')
                ->hideFromIndex(),

            HasMany::make('Lugares', 'places', Place::class),
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
