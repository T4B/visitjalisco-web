<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;

class Link extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Link';
    public static $group = 'Sitio';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title_es';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'title_es',
    ];

    /**
     * Get the displayable label of the resource.
     *
     * @return string
     */
    public static function label()
    {
        return 'Enlaces';
    }

    /**
     * Get the displayble singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return 'Enlace';
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
                ->onlyOnForms(),
            Text::make('Título', 'title_es')
                ->rules('regex:/^[a-zA-Záéíóú\s]+$/', 'max:254')
                ->rules('required'),
            Text::make('Enlace', 'url')
                ->hideFromIndex()
                ->sortable()
                ->rules('required'),
            Select::make('Target')->options([
                '_blank' => 'Página nueva',
                '_self' => 'Misma página',
            ])->hideFromIndex()
                ->rules('required')
                ->displayUsingLabels(),
            Select::make('Margen superior', 'top_space')->options([
                '0' => '0 rem',
                '1' => '0.25 rem',
                '2' => '0.50 rem',
                '3' => '0.75 rem',
                '4' => '1 rem',
                '5' => '1.25 rem',
                '6' => '1.50 rem',
                '8' => '2 rem',
                '10' => '2.5 rem',
                '12' => '3 rem',
            ])->hideFromIndex()
                ->rules('required')
                ->displayUsingLabels(),
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
