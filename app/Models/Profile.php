<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model {
    use HasFactory;

    protected $fillable = [
        'user_id',
        'price_id',
        'services_id',
        'name',
        'phone',
        'whatsapp',
        'telegram',
        'age',
        'height',
        'weight',
        'breast_size',
        'breast_type',
        'appearance',
        'section',
        'express',
        'meeting_place',
        'city',
        'haircut',
        'description',
        'images',
        'videos',
        'balance',
    ];

    protected $hidden = [

    ];

    public $timestamps = false;

    public function fields() {
        return $this->hasMany( Field::class );
    }

    public function stations() {
        return $this->belongsToMany( Station::class );
    }

    public function prices() {
        return $this->hasOne( Price::class );
    }

}
