<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    public function books()
    {
    	return $this->belongsTo(Book::class);
    }
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
