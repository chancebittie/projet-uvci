<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActeDeces extends Model
{
    use HasFactory;
    protected $fillable=[
        "extrait_defunt",
        "piece_defunt",
        "certif_medic_deces",
        "piece_demandeur",
    ];
}
