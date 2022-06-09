<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    public function getArticle(){
        return $this->belongsTo(Article::class,"article_id","id");
    }

    public function getService(){
        return $this->belongsTo(Service::class,"service_id","id");
    }
}
