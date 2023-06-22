<?php

namespace App\Models;

use App\Models\Good;
use App\Models\Color;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BasketItem extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function good()
    {
        return $this->belongsTo(Good::class, 'good_id', 'id');
    }
    public function color()
    {
        return $this->belongsTo(Color::class, 'color_id', 'id');
    }
}