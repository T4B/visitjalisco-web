<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Select;
use Benjaminhirsch\NovaSlugField\TextWithSlug;
use Benjaminhirsch\NovaSlugField\Slug;
use Laravel\Nova\Fields\MorphToMany;
use Laravel\Nova\Fields\BelongsToMany;

class Post extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Post';
    //public static $displayInNavigation = false;
    public static $group = 'Experiencias';

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
        'id',
    ];

    /**
     * Get the displayable label of the resource.
     *
     * @return string
     */
    public static function label()
    {
        return 'Publicaciones';
    }

    /**
     * Get the displayble singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return 'Publicación';
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

            Text::make('Título', 'title_es')
                ->sortable()
                ->exceptOnForms(),

            TextWithSlug::make('Título', 'title_es')
                ->slug('slug_es')
                ->rules('required', 'regex:/^[a-zA-Záéíóú\s]+$/', 'max:254')
                ->onlyOnForms(),

            Slug::make('Slug', 'slug_es')
                ->rules('required', 'alpha_dash', 'max:254', 'sometimes:unique:posts,slug_es')
                ->showUrlPreview(env('APP_URL') . '/blog')
                ->hideFromIndex(),

            Markdown::make('Extracto', 'excerpt_es')
                ->rules('required', 'max:254')
                ->hideFromIndex(),

            Markdown::make('Texto', 'text_es')
                ->rules('required')
                ->hideFromIndex(),

            Image::make('Imagen', 'image')
                ->disk('public')
                ->path('post')
                //->store(new StoreImage($this, 'public', 'post', 'image', 'resize', '1920'))
                ->rules('max:1024')
                ->creationRules('required')
                ->updateRules('nullable')
                ->prunable(),

            Text::make('Link', function () {
                return '<a class="cursor-pointer text-70 hover:text-primary" href="' . route('blog.post', ['slug' => $this->slug_es]) . '" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22" class="fill-current"><path class="heroicon-ui" d="M19 6.41L8.7 16.71a1 1 0 1 1-1.4-1.42L17.58 5H14a1 1 0 0 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0V6.41zM17 14a1 1 0 0 1 2 0v5a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7c0-1.1.9-2 2-2h5a1 1 0 0 1 0 2H5v12h12v-5z"/></svg></a>';
            })->asHtml()->exceptOnForms(),

            //MorphToMany::make('Etiquetas', 'tags', Tag::class)->searchable(),

            Select::make('Estatus', 'status')->options([
                0 => 'Borrador',
                1 => 'Publicado',
            ])->rules('required')
            ->displayUsingLabels(),

            BelongsToMany::make('Categorías', 'experiences', Experience::class)->searchable(),
            BelongsToMany::make('Regiones', 'regions', Region::class)->searchable(),
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
