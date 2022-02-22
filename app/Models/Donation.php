<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'last_name', 'email', 'player', 'amount'
    ];

    public function setPriceAttribute($value)
    {
        $this->attributes['amount'] = $value * 100;
    }
}
