<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $timestamps = false;

    protected $table = "books";

    protected $primaryKey = 'ID';

    protected $fillable = ['ISBN', 'TITLE', 'DESCRIPTION', 'PUBLISHED_YEAR'];

    // public function authors()
    // {
    //     return $this->belongsToMany(Author::class, 'book_author');
    // }

    // public function reviews()
    // {
    //     return $this->hasMany(BookReview::class);
    // }
}
