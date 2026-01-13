<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'amount',
        'status',
    ];
    public function user()
    {
        return $this->belongsToMany(User::class); // Le commentaire appartient à un article
    }
}
