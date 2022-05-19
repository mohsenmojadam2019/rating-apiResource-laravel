<?php

namespace App\Http\Resources;

class RatingResource
{
    public function toArray($request)
    {
        return [
            'user_id' => $this->user_id,
            'book_id' => $this->book_id,
            'rating' => $this->rating,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
            'book' => $this->book,
        ];
    }
}
