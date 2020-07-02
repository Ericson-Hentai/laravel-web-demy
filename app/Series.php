<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    //
    protected $fillable = [
        'title', 'description',
    ];

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

}
