<?php

namespace App;


class Image extends Model
{
    protected $table = "images";
    protected $fillable = ['filepath', 'annonces_id'];

    public function annonces()
    {
        return $this->belongsToMany('App\Annonces');
    }
}
