<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keuzevak extends Model
{
    //
    public function jaar() {
        return $this->belongsTo(Jaar::class);
    }

    public function specialisatie() {
        return $this->belongsTo(Specialisatie::class);
    }
}
