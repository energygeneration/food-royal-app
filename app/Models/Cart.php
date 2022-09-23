<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

        /**
     * Get the food associated with the cart.
     */
    public function food()
    {
        return $this->belongsTo(Food::class);
    }

}
