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
        "acte_nassance_pere",
        "acte_nassance_mere",
    ];
}
