<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Image;
use Benjaminhirsch\NovaSlugField\TextWithSlug;
use Benjaminhirsch\NovaSlugField\Slug;

class Video extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Video';

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
        'title_es', 'subtitle_es'
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
            ID::make()
                ->sortable()
                ->onlyOnForms(),
            
            TextWithSlug::make('Título', 'title_es')
                ->slug('slug')
                ->rules('regex:/^[a-zA-Záéíóú\s]+$/', 'max:254')
                ->onlyOnForms(),

            Slug::make('Slug')
                ->rules('alpha_dash', 'max:254', 'sometimes:unique:videos,slug'),

            Text::make('Subtítulo', 'subtitle_es')
                ->sortable()
                ->hideFromIndex(),

            Markdown::make('Texto', 'text_es')
                ->rules('nullable')
                ->hideFromIndex(),

            Text::make('Video URL', 'video_url')
                ->hideFromIndex()
                ->sortable(),

            Image::make('Imagen', 'image')
                ->disk('public')
                ->path('videos')
                ->rules('max:1024')
                ->creationRules('required')
                ->updateRules('nullable')
                ->prunable(),

            Select::make('Ubicación', 'position')->options([
                'mi-jalisco' => 'Mi Jalisco',
                'jalisco' => 'El estado',
            ])->displayUsingLabels(),
            
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
