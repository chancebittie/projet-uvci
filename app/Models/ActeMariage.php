<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActeMariage extends Model
{
    use HasFactory;

    protected $fillable=[
        "extrait_homme",
        "extrait_femme",
        "piece_homme",
        "piece_femme",
    ];
}
