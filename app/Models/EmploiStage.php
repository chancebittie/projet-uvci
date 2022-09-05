<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmploiStage extends Model
{
    use HasFactory;
    protected $fillable=[
        "titre_annonce",
        "description",
        "nombre_poste",
        "user_id",
        "nom_entreprise",
    ];
}
