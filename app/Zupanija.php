<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zupanija extends Model
{
     public function mjestos()
    {
        return $this->hasMany('App\Mjesto')->orderBy('naziv');;
    }
    public function delete() {
        // delete all related
        $this->mjestos()->delete();
        return parent::delete();
    }
}
