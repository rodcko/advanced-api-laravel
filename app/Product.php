<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use CanBeRate;
    
    protected $guarded = [];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class);
    }
}
