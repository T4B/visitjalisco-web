<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Benjaminhirsch\NovaSlugField\TextWithSlug;
use Benjaminhirsch\NovaSlugField\Slug;
use Laravel\Nova\Fields\HasMany;

class Experience extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Experience';
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
        return 'Experiencias';
    }

    /**
     * Get the displayble singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return 'Experiencias';
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
            HasMany::make('Destinos', 'destinations', Destination::class),
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
