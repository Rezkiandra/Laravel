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
        'customer_id',
        'invoice',
        'cash',
        'change',
        'discount',
        'grand_total',
        'table_total',
    ];

    public function cashier()
    {
        return $this->belongsTo(User::class, 'cashier_id');
    }

    public function profits()
    {
        return $this->hasMany(Profits::class);
    }
}
