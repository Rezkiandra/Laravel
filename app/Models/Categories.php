<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = [
        'image', 'name', 'description'
    ];

    public function products() {
        return $this->hasMany(Products::class);
    }

    /**
     * @return attribute
     */

    protected function image(): Attribute {
        return Attribute::make(
            get: fn ($value) => asset('/storage/categories/' . $value),
        );
    }
}
