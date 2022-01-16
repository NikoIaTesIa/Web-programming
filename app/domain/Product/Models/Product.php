<?php


namespace App\Domain\Product\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'id',
        'title',
        'origin_title',
        'type',
        'release_year',
        'episodes_count',
        'studio',
        'author',
        'age_rating',
        'synopsis'
    ];

}
