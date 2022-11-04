<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Profits extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id',
        'total',
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
