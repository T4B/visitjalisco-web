<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Select;
use Benjaminhirsch\NovaSlugField\TextWithSlug;
use Benjaminhirsch\NovaSlugField\Slug;

class Post extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Post';

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
        return 'Blog';
    }

    /**
     * Get the displayble singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return 'Post';
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
            Text::make('Título', 'title')
                ->sortable()
                ->exceptOnForms(),
            TextWithSlug::make('Título', 'title')
                ->slug('slug')
                ->rules('required', 'regex:/^[a-zA-Z\s]+$/', 'max:254')
                ->onlyOnForms(),
            Slug::make('Slug')
                ->rules('required', 'alpha_dash', 'max:254', 'sometimes:unique:posts,slug')
                ->showUrlPreview(env('APP_URL') . '/blog'),

            Select::make('Idioma', 'language')->options([
                'es' => 'Español',
                'en' => 'Inglés',
            ])->displayUsingLabels()
                ->rules('required')
                ->creationRules('unique:posts,language')
                ->updateRules('unique:posts,language,{{resourceId}}'),

            Markdown::make('Extracto', 'excerpt')
                ->rules('required')
                ->hideFromIndex(),
            Markdown::make('Texto', 'text')
                ->rules('required')
                ->hideFromIndex(),
            Image::make('Imagen', 'image')
                ->disk('public')
                ->path('post')
                ->rules('max:1024')
                ->creationRules('required')
                ->updateRules('nullable')
                ->prunable(),
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
