<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'crypto_type', 'quantity', 'purchase_price', 'purchase_date'];

    public function user()
    {
        return $this->belongsTo(User::class);  // Assuming User model is in the same namespace as Portfolio model
    }
}
