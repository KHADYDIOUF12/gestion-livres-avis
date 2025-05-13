<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Book extends Model
{
    protected $fillable = [
        'title',
        'author',
        'description',
        'published_at',
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function getAverageRatingAttribute()
{
    return $this->reviews()->avg('rating');
}

}
