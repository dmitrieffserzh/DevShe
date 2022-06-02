<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;

class Profile extends Model {
    use HasFactory;
    use Filterable;

    protected $table = 'profiles';

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

    protected $hidden = [];

    public $timestamps = false;

    protected $allowedFilters = [ 'id', 'name', 'phone' ];
    protected $allowedSorts = [ 'id' ];


    // RELATIONS
    public function user() {
        return $this->belongsTo( User::class );
    }

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
