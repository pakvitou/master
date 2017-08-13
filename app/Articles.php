<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use AlgoliaSearch\Laravel\AlgoliaEloquentTrait;

class Articles extends Model
{
    use AlgoliaEloquentTrait;
    use Searchable;
    protected $table = 'articles';

//    public function searchableAs()
//    {
//        return 'title';
//    }

    public $asYouType = true;

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        $array = $this->toArray();

        // Customize array...

        return $array;
    }

}
