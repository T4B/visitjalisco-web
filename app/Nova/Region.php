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

class Region extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Region';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Nombre', 'name_es')
                ->sortable(),
            Select::make('Color', 'color')->options([
                'orange-100' => 'Naranja',
                'red-300' => 'Rojo',
                'green-200' => 'Verde lima',
                'green-300' => 'Verde primavera',
                'green-400' => 'Verde',
                'purple-400' => 'Morado',
                'blue-400' => 'Azul claro',
                'blue-500' => 'Azul oscuro',
            ])->displayUsingLabels(),
            Markdown::make('Descripción corta', 'short_description_es')
                ->rules('nullable')
                ->hideFromIndex(),
            Markdown::make('Descripción corta', 'full_description_es')
                ->rules('nullable')
                ->hideFromIndex(),
            Image::make('Imagen Principal', 'main_image')
                ->disk('public')
                ->path('regions')
                ->rules('max:1024')
                ->creationRules('required')
                ->updateRules('nullable')
                ->prunable(),
            Image::make('Imagen Interior', 'interior_image')
                ->disk('public')
                ->path('regions')
                ->rules('max:1024')
                ->creationRules('required')
                ->updateRules('nullable')
                ->prunable(),
            Number::make('Orden', 'order')
                ->sortable(),

            Images::make('Galería', 'gallery')
                ->multiple()
                ->singleImageRules('image')
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
