<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable=[
        "nom",
        "prix",
        "imageUrl",
        "type_article_id",
    ];

    public function typeArticle(){
        return  $this->belongsTo(TypeArticle::class);
    }
}
