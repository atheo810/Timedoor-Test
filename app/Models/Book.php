<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_name',
        'book_category_id',
        'author_id'
    ];

    protected $table = 'books';

    public function category()
    {
        return $this->belongsTo(BookCategory::class, 'book_category_id');
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function averageRating()
    {
        return $this->ratings()->avg('rating_value');
    }
}
