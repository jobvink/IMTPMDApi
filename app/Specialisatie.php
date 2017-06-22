<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialisatie extends Model
{
    public function specialisatievakken() {
        return $this->hasMany(Specialisatievak::class);
    }
}
