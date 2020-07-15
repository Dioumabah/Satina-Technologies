<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    protected $fillable = [
         'designation', 'cout',
    ];


    public function scopeFactures($query){
        return $query->orderBy('created_at', 'DESC')->get();

    }

    public function clients(){
    	return $this->belongsTo('App\Models\Client', 'client_id', 'id');
    }

    public function getClientListAttribute(){
        if($this->id){
            return $this->clients->lists('id');
        }
    }
}
