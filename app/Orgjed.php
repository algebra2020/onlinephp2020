<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orgjed extends Model
{
// Kreiraj SELF-JOIN relaciju za Nadorganizacijsku hijerarhiju
    
    public function predmets()
    {
        return $this->hasMany('App\Predmet')->orderBy('naziv');
        
    }
    public function nastavniks()
    {
        return $this->hasMany('App\Nastavnik')->orderBy('prezime');
    }
}
