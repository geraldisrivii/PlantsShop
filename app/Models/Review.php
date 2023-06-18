<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public function good(){
        return $this->belongsTo(Good::class, 'good_id', 'id');
    }
}
