<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devis extends Model
{
    protected $fillable = [
        'nom', 'prenom', 'email', 'tel','adresse', 'cp', 'ville', 'installation', 'entretien', 'depannage', 'dateVoulu', 'desc',
    ];
}
