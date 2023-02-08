<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $fillable = [
        'title',
        'price',
        'discount',
        'genre',
        'age',
        'delivery',
        'author'
    ];

    public function deliveryFrom()
    {
        return $this->belongsTo(Delivery::class, 'delivery', 'id');
    }

    public function authorProduct()
    {
        return $this->belongsTo(Author::class, 'author', 'id');
    }

    public function ageRange()
    {
        return $this->belongsTo(AgeRange::class, 'age', 'id');
    }
}
