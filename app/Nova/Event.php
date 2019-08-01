<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;

class Event extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Event';

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
        return 'Eventos';
    }

    /**
     * Get the displayble singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return 'Evento';
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
            ID::make()->onlyOnForms(),
            Text::make('Nombre', 'name')
                ->sortable(),
            Text::make('Fecha', 'date_es')
                ->sortable(),
            Text::make('Lugar', 'place')
                ->sortable(),
            Markdown::make('Texto', 'text_es')
                ->rules('nullable')
                ->hideFromIndex(),
            Text::make('Enlace', 'url')
                ->hideFromIndex()
                ->sortable(),
            Select::make('Target')->options([
                '_blank' => 'Blank',
                '_self' => 'Self',
            ])->hideFromIndex(),
            Image::make('Imagen principal', 'thumb_image')
                ->disk('public')
                ->path('events')
                ->rules('max:1024')
                ->creationRules('required')
                ->updateRules('nullable')
                ->prunable(),
            Boolean::make('Destacado', 'highlight'),
            Image::make('Imagen destacados', 'large_image')
                ->disk('public')
                ->path('events')
                ->rules('max:1024')
                ->updateRules('nullable')
                ->prunable()
                ->hideFromIndex()
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
