<?php

class Album extends Eloquent
{
    public $timestamps = false;

    public function scopeTriplePeriod($query)
    {
        return $query->where('title', 'LIKE', '...%');
    }
}