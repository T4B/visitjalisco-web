<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Image;

class ConventionCenter extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\ConventionCenter';
    public static $group = 'Convenciones';

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
     * Get the displayable label of the resource.
     *
     * @return string
     */
    public static function label()
    {
        return 'Centros de convenciones';
    }

    /**
     * Get the displayble singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return 'Centro de convenciones';
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
                ->onlyOnIndex()
                ->sortable(),
            Text::make('Nombre', 'name')
                ->sortable(),
            Text::make('Subtítulo', 'subtitle_es')
                ->sortable()
                ->hideFromIndex(),
            Markdown::make('Descripción', 'text_es')
                ->rules('nullable')
                ->hideFromIndex(),
            Text::make('Correo electrónico', 'email')
                ->sortable(),
            Text::make('Teléfono', 'phone')
                ->sortable(),
            Image::make('Logotipo', 'image')
                ->disk('public')
                ->path('convention-centers')
                ->rules('max:1024')
                ->creationRules('required')
                ->updateRules('nullable')
                ->prunable()
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
