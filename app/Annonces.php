<?php

namespace App;

use EloquentFilter\Filterable;

class Annonces extends Model
{
    use Filterable;

    public function modelFilter()
    {
        return $this->provideFilter(\App\ModelFilters\AnnoncesFilter::class);
    }


    protected $fillable = [
        'titre', 'description', 'photographie', 'prix', 'user_id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
