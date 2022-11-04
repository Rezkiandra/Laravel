<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'image',
        'barcode',
        'title',
        'description',
        'buy_price',
        'sell_price',
        'stock',
    ];

    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }
}
