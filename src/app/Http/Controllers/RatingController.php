<?php

namespace App\Http\Controllers;
use App\Book;
use App\Rating;
use App\Http\Resources\RatingResource;
class RatingController
{
    public function store(Request $request, Book $book)
    {
        $rating = Rating::firstOrCreate(
            [
                'user_id' => $request->user()->id,
                'book_id' => $book->id,
            ],
            ['rating' => $request->rating]
        );

        return new RatingResource($rating);
    }
}
