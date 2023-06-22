<?php

namespace App\Models;

use App\Models\Color;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Good extends Model
{
    use HasFactory;
    protected $guarded = [
        
    ];

    public function reviews(){
        return $this->hasMany(Review::class, 'good_id', 'id');
    }
    public function sale(){
        return $this->belongsTo(Sales::class, 'sales_id', 'id');
    }
    public function colors(){
        return $this->belongsToMany(Color::class, 'goods_colors', 'good_id', 'color_id');
    }
}
