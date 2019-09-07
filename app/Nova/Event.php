<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;
use Intervention\Image\Facades\Image as ImageHandler;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'name',
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
                ->sortable()
                ->rules('required'),
            Text::make('Lugar', 'place')
                ->sortable()
                ->rules('required'),
            Markdown::make('Texto', 'text_es')
                ->rules('nullable')
                ->hideFromIndex(),
            Text::make('Enlace', 'url')
                ->hideFromIndex()
                ->sortable(),
            Select::make('Target')->options([
                '_blank' => 'Página nueva',
                '_self' => 'Misma página',
            ])->hideFromIndex()
                ->rules('required'),
            Image::make('Imagen principal', 'thumb_image')
                ->rules('max:1024')
                ->creationRules('required')
                ->updateRules('nullable')
                ->store(new StoreImage($this, 'public', 'events', 'thumb_image', 'resize', '650') )
                ->delete(function (Request $request, $model, $disk, $path) {
                    if (! $path) {
                        return;
                    }
                    Storage::disk($disk)->delete($path);
                    return [
                        'thumb_image' => '',
                    ];
                })
                ->prunable(),
            Image::make('Imagen destacados', 'large_image')
                ->rules('max:1024')
                ->updateRules('nullable')
                ->store(new StoreImage($this, 'public', 'events', 'large_image', 'resize', '500') )
                ->prunable()
                ->hideFromIndex(),
            Boolean::make('Destacado', 'highlight'),
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

    // public function storeImage(Request $request, $field_name, $width)
    // {
    //     $fileName = Str::orderedUuid() . '.jpg';
    //     $resized = ImageHandler::make($request->$field_name)
    //                 ->resize($width, null, function ($constraint) {
    //                     $constraint->aspectRatio();
    //                     $constraint->upsize();
    //                 })->encode('jpg', 90);
    //     Storage::disk('public')->put('events/'.$fileName, (string) $resized);
    //     $resized->destroy();
    //     return [
    //         $field_name => 'events/'.$fileName,
    //     ];
    //     // return [
    //         // 'thumb_image' => $request->thumb_image->store('/events'),
    //         // 'thumb_image_name' => $request->thumb_image->getClientOriginalName(),
    //         // 'thumb_image_size' => $request->thumb_image->getSize(),
    //     // ];
    // }
}
