<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    use HasFactory;
    protected $guarded = [
        
    ];

    public function reviews(){
        return $this->hasMany(Review::class, 'good_id', 'id');
    }
}
