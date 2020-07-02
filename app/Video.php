<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
    protected $guarded = [];

    protected $appends = ['url'];

    public function series()
    {
        return $this->belongsTo(Series::class);
    }

    public function getUrlAttribute()
    {
        return route('series.show.episode', [$this->series, $this->episode_number]);
    }
}
