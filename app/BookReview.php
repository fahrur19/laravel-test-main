<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookReview extends Model
{
    public $timestamps = false;

    protected $table = "book_reviews";

    protected $fillable = ['ID', 'COMMENT', 'REVIEW', 'USER_ID', 'BOOK_ID'];

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    // public function book()
    // {
    //     return $this->belongsTo(Book::class);
    // }
}
