<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed status
 */
class Book extends Model
{
    /**
     * @return mixed
     */
    public function status()
    {
       return $this->status;
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
