<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActeNaissance extends Model
{
    use HasFactory;

    protected $fillable=[
        "nom",
        "prenom",
        "date_naissance",
        "acte_naissance_pere",
        "acte_naissance_mere",
    ];
}
