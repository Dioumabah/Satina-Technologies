<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $fillable = [
        'matricule', 'nom', 'prenom','formation', 'montant', 'date_debut', 'date_fin', 'avance',
    ];

    public function scopePublished($query){
        return $query->whereDate('date_fin', '<', 'NOW()');

    }

    public function scopeFinder($query){
        return $query->orderBy('created_at', 'DESC')->get();

    }

    public function isDateAttents(){
        return $this->date_fin>NOW();

    }
}
