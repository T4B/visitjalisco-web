<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;

class Jalisco extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Jalisco';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * Get the displayble label of the resource.
     *
     * @return string
     */
    public static function label()
    {
        return 'Estado';
    }

    public static function singularLabel()
    {
        return 'Estado';
    }

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = false;

    public static $globallySearchable = false;

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
            Select::make('Idioma', 'language')->options([
                'es' => 'Español',
                // 'en' => 'Inglés',
            ])->displayUsingLabels()
                ->rules('required')
                ->creationRules('unique:jalisco,language')
                ->updateRules('unique:jalisco,language,{{resourceId}}'),
            Markdown::make('Texto encabezado', 'header_text')
                ->hideFromIndex(),
            Markdown::make('Historia', 'history')
                ->hideFromIndex(),
            Markdown::make('Información - superior', 'info_top')
                ->hideFromIndex(),
            Markdown::make('Información - izquierda', 'info_left')
                ->hideFromIndex(),
            Images::make('Galería', 'gallery')
                ->multiple()
                ->singleImageRules('image')
                ->hideFromIndex()
                ->customPropertiesFields([
                    Text::make('Name'),
                ]),
            Text::make('Link', function () {
                return '<a class="cursor-pointer text-70 hover:text-primary" href="/jalisco" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22" class="fill-current"><path class="heroicon-ui" d="M19 6.41L8.7 16.71a1 1 0 1 1-1.4-1.42L17.58 5H14a1 1 0 0 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0V6.41zM17 14a1 1 0 0 1 2 0v5a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7c0-1.1.9-2 2-2h5a1 1 0 0 1 0 2H5v12h12v-5z"/></svg></a>';
            })->asHtml()->exceptOnForms(),
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
