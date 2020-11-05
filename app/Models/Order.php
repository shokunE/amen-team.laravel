<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property bool status
 * @property mixed id
 */
class Order extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'book_id'];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
