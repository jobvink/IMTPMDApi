<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jaar extends Model
{
    //
    public function keuzevakken() {
        return $this->hasMany(Keuzevak::class);
    }

    public function specialisatievakken() {
        return $this->hasMany(Specialisatievak::class);
    }

    public function verplichtevakken() {
        return $this->hasMany(Verplichtvak::class);
    }
}
