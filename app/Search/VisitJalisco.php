<?php

namespace App\Search;

use Algolia\ScoutExtended\Searchable\Aggregator;
use Laravel\Scout\Searchable;

class VisitJalisco extends Aggregator
{
    /**
     * The names of the models that should be aggregated.
     *
     * @var string[]
     */
    protected $models = [
        \App\Post::class,
        \App\Experience::class,
        \App\Region::class,
        \App\Route::class,
    ];

    public function shouldBeSearchable()
    {
        if (array_key_exists(Searchable::class, class_uses($this->model))) {
            return $this->model->shouldBeSearchable();
        }
    }
}
