<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model {
    use HasFactory;

    // RELATIONS
    public function profiles() {
        return $this->belongsToMany( Profile::class );
    }
}
