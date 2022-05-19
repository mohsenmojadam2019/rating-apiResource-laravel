<?php

namespace App\Models;

class Rating
{
    protected $fillable = ['book_id', 'user_id', 'rating'];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
