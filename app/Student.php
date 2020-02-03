<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
     protected $primaryKey = 'mbrstud';
     protected $table = 'students';
    public function mjestorodjenja() //TODO belongs to mjesto student
    {
        return $this->belongsTo('App\Mjesto','pbrrod','pbr');
    }
    public function mjestostanovanja()
    {
        return $this->belongsTo('App\Mjesto','pbrstan','pbr');
    }
    public function proba()
    {
        return "Test uspjesan";
    }
}
