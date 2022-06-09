<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected static function boot(){
        parent::boot();
        self::creating(function ($model) {
            $model->position = $model->max('position') + 1;
        });
    }
}
