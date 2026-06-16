<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'user_id',
        'jersey_id',
        'quantity',
        'total_price'
    ];

    public function jersey()
    {
        return $this->belongsTo(Jersey::class);
    }
}
