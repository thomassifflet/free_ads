<?php namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class AnnoncesFilter extends ModelFilter
{
    /**
    * Related Models that have ModelFilters as well as the method on the ModelFilter
    * As [relatedModel => [input_key1, input_key2]].
    *
    * @var array
    */
    public $relations = [];

    public function annonce($id)
    {
        return $this->where('annonce_id', $id);
    }

    public function titre($titre)
    {
        return $this->where('titre', 'LIKE', "%$titre%");
    }

    public function user($id)
    {
        return $this->where('user_id', $id);
    }

    public function description($description)
    {
        return $this->where(function($q) use ($description)
        {
           return $q->where('description', 'LIKE', "%$description%");
        });
    }

    public function prix($prix)
    {
        return $this->where('prix' , 'LIKE', "%$prix%");
    }
}
