<?php

namespace App\Models;

class Book
{

    protected $fillable = ['user_id', 'title', 'description'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

}
