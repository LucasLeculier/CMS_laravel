<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $fillable = [
        'nom', 'template', 'couleur_police', 'couleur_background', 'couleur_separation', 'image', 'article'
    ];
}
