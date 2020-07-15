<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'nom', 'prenom',
   ];

    public function scopeClients($query){
        return $query->orderBy('created_at', 'DESC')->get();

    }

    public function factures(){
    	return $this->hasMany('App\Models\Facture');
    }
}
